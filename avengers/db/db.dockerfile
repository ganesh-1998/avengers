FROM mysql

ENV MYSQL_DATABASE mydb

COPY ./createtable.sql /docker-entrypoint-initdb.d/

COPY ./insertvalue.sql /docker-entrypoint-initdb.d/

COPY ./privillage.sql /docker-entrypoint-initdb.d/
