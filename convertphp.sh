rm *.html
for file in php/*.php; do
	php $file > `basename "${file%.php}"`.html;
done
