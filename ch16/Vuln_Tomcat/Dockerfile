FROM tomcat:9

COPY tomcat-users.xml /usr/local/tomcat/conf/
COPY context.xml ./webapps/manager/META-INF/context.xml
COPY context.xml ./webapps/host-manager/META-INF/context.xml
COPY wars/struts-2.3.15.1-showcase.war /tmp/
COPY wars/struts-2-5-10-rest-showcase.war /tmp/

RUN catalina.sh start && sleep 5 && curl --upload-file /tmp/struts-2.3.15.1-showcase.war "http://tomcat:tomcat@localhost:8080/manager/text/deploy?path=/struts-showcase&update=true" && curl --upload-file /tmp/struts-2-5-10-rest-showcase.war "http://tomcat:tomcat@localhost:8080/manager/text/deploy?path=/struts-rest-showcase&update=true" 
