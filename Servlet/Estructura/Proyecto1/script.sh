#/bin/bash


rm /opt/tomcat/latest/webapps/Proyecto1.war
rm -r /opt/tomcat/latest/webapps/Proyecto1
jar -cvf Proyecto1.war *
sudo cp Proyecto1.war /opt/tomcat/latest/webapps
rm Proyecto1.war

exit 0
