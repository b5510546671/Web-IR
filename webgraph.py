import os
from urlparse import urljoin
from bs4 import BeautifulSoup

url_list = []

with open(os.path.normpath('d:/Web Information Retrieval/lab/urlmap.txt'), 'r') as f:
	for line in f:
		url_list.append(line.rstrip())
f.close()

webgraph = open("webgraph.txt", 'w')

pagelist = []

for folder, subfolders, files in os.walk(os.path.abspath("D:\Web Information Retrieval\lab\html")):

	for name in files:
		if name.endswith((".html", ".htm")):
			pagelist.append(os.path.join(os.path.abspath(folder), name))
			# print ("++++++++++++++" + os.path.abspath(folder).replace("D:\Web Information Retrieval\lab\html\\", "").replace("-\\", "\\"))

for p in pagelist:
	page = open(p, "r")
	absPageName = p.replace("D:\Web Information Retrieval\lab\html\\", "http://").replace("-\\", "\\").replace("\\", "/")
	content = page.read()
	soup = BeautifulSoup(content, "lxml")

	href_list = []

	for s in soup.find_all('a'):
		try:
			page = s['href']
			if page.endswith((".html", ".htm")):
				print page
				print urljoin(absPageName, page)
				href_list.append(urljoin(absPageName, page))
		except Exception as e:
			print("Error at line 39...")

	result = ""
	for href in href_list:
		try:
			index = str(url_list.index(href))
			if not index in result:
				if not result == "":
					result += " "
				result += str(url_list.index(href))
		except Exception as e:
			pass
	if len(href_list) == 0 or result == "":
		result += "-"
	
	result += "\n"
	webgraph.write(result)


webgraph.close()