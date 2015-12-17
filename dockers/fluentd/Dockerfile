FROM centos:6.7

#install fluentd
ADD etc/td.repo /etc/yum.repos.d/td.repo
RUN rpm --import https://packages.treasuredata.com/GPG-KEY-td-agent; yum check-update; yes|yum install -y td-agent
RUN yum install -y initscripts
ADD etc/td-agent.conf /etc/td-agent/td-agent.conf

EXPOSE 24224

CMD /usr/sbin/td-agent
