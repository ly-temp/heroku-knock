chmod +x ../no-backup/knock
for i in *.acsm;do
  ../no-backup/knock "$i" && rm "$i"
done;
