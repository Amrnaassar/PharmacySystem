TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER update_Drug_name\nBEFORE INSERT ON Drugs\nFOR EACH ROW\nSET NEW.dName = UPPER(NEW.dName)'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='utf8mb4_general_ci'
created=161256122285
