create database DATABASENAME;
grant usage on *.* to USERNAME@localhost identified by 'PASSWORD';
grant all privileges on DATABASENAME.* to USERNAME@localhost ;
