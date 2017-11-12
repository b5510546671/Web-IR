from bs4 import BeautifulSoup

content = '''
<span class="meta-attributes__attr-tags">
<a href="/tags/cinematic" title="cinematic">cinematic</a>, 
<a href="/tags/dissolve" title="dissolve">dissolve</a>,
<a href="/tags/epic" title="epic">epic</a>,
<a href="/tags/fly" title="fly">fly</a>,
</span>
'''

soup = BeautifulSoup(content, "lxml")

print(soup.find_all('a'))

for s in soup.find_all('a'):
	print s['href']

# spans = soup.find_all()
# for span in spans:
#     links = span.find_all('a')
#     for link in links:
#         print link['href']