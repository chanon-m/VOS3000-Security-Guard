# VOS3000-Security-Guard
Avoided SIP attackers for VOS 3000 SoftSwitch with Console

#Licensing Information: READ LICENSE

#Project source can be downloaded from
##https://github.com/chanon-m/VOS3000-Security-Guard.git

#Author & Contributor

Chanon Mingsuwan

Reported bugs can be sent to chanonm@live.com

#How to run file

1. Import blacklist.sql into VOD3000's database

---

mysql -u root vos3000db < blacklist.sql

---

2. Upload vos3000guard.pl to your VOS3000 SoftSwitch in /etc

3. chmod 755 /etc/vos3000guard.pl

4. Create a crontab job on your server

If you want vos3000guard.pl to run every 5 minutes, you should code the time as:


---

*/5 * * * *      /etc/vos3000guard.pl >> /var/log/vos3000guard.log&

---


#PROJECT IN PROGRESS
