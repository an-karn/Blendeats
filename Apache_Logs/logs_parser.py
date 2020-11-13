import apache_log_parser  # https://github.com/rory/apache-log-parser

file = open('access_log', 'r')

line_parser = apache_log_parser.make_parser(
    "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"")
data = []
for line in file:
    if (line.find('~igiri') != -1 and line.find('assets') == -1):
        log_line_data = line_parser(line)
        data.append(log_line_data)

file.close()

paths = {}
for d in data:
    if(d['request_url'] in paths):
        if d['remote_host'] in paths[d['request_url']]:
            if d['request_header_user_agent__browser__family'] in paths[d['request_url']][d['remote_host']]:
                paths[d['request_url']][d['remote_host']][d['request_header_user_agent__browser__family']]['time'].append(
                    d['time_received_isoformat'])
                paths[d['request_url']][d['remote_host']
                                        ][d['request_header_user_agent__browser__family']]['count'] += 1
            else:
                paths[d['request_url']][d['remote_host']][d['request_header_user_agent__browser__family']] = {'count': 1,
                                                                                                              'time': [(d['time_received_isoformat'])]}
            paths[d['request_url']][d['remote_host']]['count'] += 1
        else:
            paths[d['request_url']][d['remote_host']] = {'count': 1, d['request_header_user_agent__browser__family']: {'count': 1,
                                                                                                                       'time': [(d['time_received_isoformat'])]}}
        paths[d['request_url']]['count'] += 1
    else:
        paths[d['request_url']] = {'count': 1, d['remote_host']: {'count': 1, d['request_header_user_agent__browser__family']: {'count': 1,
                                                                                                                                'time': [(d['time_received_isoformat'])]}}}

# for d in data:
#     if(d['remote_host'] not in paths[d['request_url']]):
#         paths[d['request_url']].append({})

#         print(d['time_received_datetimeobj'].date())
#         print(d['request_header_user_agent__browser__family'])
#         paths[d['request_url']].append(d['remote_host'])


print(paths)

for key in paths:
    print("")
    print("============================================")

    print(key,end="")
    for key1 in paths[key]:
        if key1 == "count":
            print(" > Count:", paths[key]['count'])
        else:
            print("")

            print("---", key1,end="")
            for key2 in paths[key][key1]:
                if key2 == "count":
                    print(" > Count:", paths[key][key1]['count'])
                else:
                    print("   ---", key2,end="")
                    for key3 in paths[key][key1][key2]:
                        if key3 == "count":
                            print(" > Count:",
                                  paths[key][key1][key2]['count'])
                        elif key3 == 'time':
                            for t in paths[key][key1][key2]['time']:
                                print("       ------", t)
