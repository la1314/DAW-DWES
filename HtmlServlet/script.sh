#/bin/bash

jar -cvf web.war *
sudo cp web.war /opt/tomcat/latest/webapps

exit 0

