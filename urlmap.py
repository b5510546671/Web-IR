import os

file = open("urlmap.txt", 'w')

for folder, subfolders, files in os.walk(os.path.abspath("D:\Web Information Retrieval\lab\html")):

	for name in files:
		if name.endswith((".html", ".htm")):
			file.write("http://"+os.path.join(os.path.abspath(folder), name).replace("D:\Web Information Retrieval\lab\html\\", "").replace("-\\", "\\").replace("\\", "/"))
			file.write("\n")

file.close()