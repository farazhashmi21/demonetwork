echo "Project Name: demonetwork";
echo $(git init);
echo $(git add .);
echo $(git commit -m "first commit");
echo $(git branch -M master);
echo $(git remote add origin https://github.com/farazhashmi21/demonetwork.git);
echo $(git remote -v);
echo $(git push -u origin master);
