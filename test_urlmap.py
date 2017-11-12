import os

for folder, subfolders, files in os.walk(os.path.abspath("D:\Web Information Retrieval\lab\html")):

	for name in files:
		if name.endswith((".html", ".htm")):
			print (os.path.join(os.path.abspath(folder), name))
			# print ("++++++++++++++" + os.path.abspath(folder).replace("D:\Web Information Retrieval\lab\html\\", "").replace("-\\", "\\"))

