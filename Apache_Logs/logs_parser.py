import apache_log_parser  # https://github.com/rory/apache-log-parser

import matplotlib.pyplot as plt
import matplotlib

from collections import Counter
import datetime

file = open('access_log', 'r')


errors = []
# parse function
line_parser = apache_log_parser.make_parser(
    "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"")
data = []
for line in file:
    # if our subdirectory and not including css/images links
    if (line.find('~igiri') != -1 and line.find('assets') == -1):
        log_line_data = line_parser(line)

        # add only errors
        if(int(log_line_data['status']) >= 400):
            errors.append(log_line_data)
        # add everything
        data.append(log_line_data)

file.close()

# short names for parsing
url = "request_url"
remotehost = "remote_host"
browser = "request_header_user_agent__browser__family"


urls = {}  # count
browsers = {}  # count
times={}
ipcount={}

paths = {}
for d in data:  # go through each parsed data

    # for counting
    if(d[url] in urls):  # if url is already there
        urls[d[url]] += 1
    else:
        urls[d[url]] = 1

    if(d[browser]) in browsers:
        browsers[d[browser]] += 1
    else:
        browsers[d[browser]] = 1

    if(d[remotehost]) in ipcount:
        ipcount[d[remotehost]] += 1
    else:
        ipcount[d[remotehost]] = 1

    if(d['time_received_datetimeobj'].strftime("%d/%m/%Y")) in times:
        times[d['time_received_datetimeobj'].strftime("%d/%m/%Y")] += 1
    else:
        times[d['time_received_datetimeobj'].strftime("%d/%m/%Y")] = 1

    # for each url full description

    if(d[url] in paths):  # if url is already there
        if d[remotehost] in paths[d[url]]:  # if remote ip is there
            if d[browser] in paths[d[url]][d[remotehost]]:  # if same browser with same url
                paths[d[url]][d[remotehost]][d[browser]]['time'].append(
                    d['time_received_isoformat'])
                # if browser exist add browser count
                paths[d[url]][d[remotehost]
                              ][d[browser]]['count'] += 1
            else:  # if no browser add time and count for browser
                paths[d[url]][d[remotehost]][d[browser]] = {'count': 1,
                                                            'time': [(d['time_received_isoformat'])]}
            paths[d[url]][d[remotehost]]['count'] += 1  # adding ip count
        else:  # if no ip add ip /browser/ time and count for ip and browser.
            paths[d[url]][d[remotehost]] = {'count': 1, d[browser]: {'count': 1,
                                                                     'time': [(d['time_received_isoformat'])]}}
        paths[d[url]]['count'] += 1  # //if url exists add count
    else:
        paths[d[url]] = {'count': 1, d[remotehost]: {'count': 1, d[browser]: {'count': 1,
                                                                              'time': [(d['time_received_isoformat'])]}}}


for url in paths:
    print("")
    print("============================================")

    print(url, end="")
    for remotehost in paths[url]:
        if remotehost == "count":
            print(" > Count:", paths[url]['count'])
        else:
            print("")

            print("---", remotehost, end="")
            for browser in paths[url][remotehost]:
                if browser == "count":
                    print(" > Count:", paths[url][remotehost]['count'])
                else:
                    print("   ---", browser, end="")
                    for url3 in paths[url][remotehost][browser]:
                        if url3 == "count":
                            print(" > Count:",
                                  paths[url][remotehost][browser]['count'])
                        elif url3 == 'time':
                            for t in paths[url][remotehost][browser]['time']:
                                print("       ------", t)


print("\n\n=============ERRORS============")

for error in errors:
    print(f"\n\nURL:  {error['request_url']} \nRequested By:  {error['remote_host']} \nError code: {error['status']} \nTime received:  {error['time_received_isoformat']}")


print("\n\n=============ALL URLs============")

for key in urls:
    print(key, " ", urls[key])

print("\n\n=============ALL BROWSERS ============")

for key in browsers:
    print(key, " ", browsers[key])


print("\n\n=============TOP 3 URL ============")

# top3 urls
uc = Counter(urls)
high_uc = uc.most_common(3)
for i in high_uc:
    print(i[0], " :", i[1], " ")


print("\n\n=============TOP 3 BROWSER ============")

# top3 browser
bc = Counter(browsers)
high_bc = bc.most_common(3)
for j in high_bc:
    print(j[0], " :", j[1], " ")



plt.style.use('ggplot')



# plot timeline vs views

x= [datetime.datetime.strptime(key,'%d/%m/%Y') for key in times]


# dates = matplotlib.dates.date2num(x)

y=[times[key] for key in times]



plt.plot(x, y,'o-')

ax = plt.gca()

#plt.xticks(y, x)

formatter = matplotlib.dates.DateFormatter("%Y-%m-%d")
ax.xaxis.set_major_formatter(formatter)

plt.show()


#plot ips 
# x= [key for key in ipcount]
# y=[ipcount[key] for key in ipcount]

# x_pos = [i for i, _ in enumerate(x)]

# plt.barh(x_pos, y, color='green',)
# plt.ylabel("IPS")
# plt.xlabel("IP Visits")
# plt.title("IP Count")

# plt.yticks(x_pos, x)
# plt.show()




# #plot url 
# x= [key for key in urls]
# y=[urls[key] for key in urls]


# x_pos = [i for i, _ in enumerate(x)]

# plt.barh(x_pos, y, color='green',)
# plt.ylabel("Urls")
# plt.xlabel("Url Visits")
# plt.title("URL Count")

# plt.yticks(x_pos, x)
# plt.show()
