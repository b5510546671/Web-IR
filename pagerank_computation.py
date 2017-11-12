import numpy as np
import os

page_scores = open("page_scores.txt", 'w')

np.set_printoptions(threshold=np.inf)

webgraph_list = []

with open(os.path.normpath('d:/Web Information Retrieval/lab/webgraph.txt'), 'r') as f:
	for line in f:
		webgraph_list.append(line.rstrip())
f.close()

n = len(webgraph_list)
alpha = 0.85

p_list = []

for w in webgraph_list:
	tmp_p_list = [0] * n
	if not w == '-':
		page_num_list = w.split()

		for p in page_num_list:
			tmp_p_list[int(p)] = 1.0 / len(page_num_list)

	p_list.append(tmp_p_list)

p_matrix = np.matrix(p_list)
print "p_matrix.shape"
print p_matrix.shape

p_dash_dash = alpha * p_matrix + (1-alpha)*np.matrix(np.full((n,n), 1.0/n))

print "p_dash_dash.shape"
print p_dash_dash.shape


rt_1 = p_matrix.transpose() * np.matrix(np.full((n,1), alpha))
print "rt_1.shape"
print rt_1.shape


rt = alpha*p_dash_dash.transpose()*rt_1 + (1-alpha)*np.matrix(np.full((n,1), 1.0/n))
print "rt.shape"
print rt.shape

for elem in rt:
	page_scores.write(elem)
	print elem

page_scores.close()