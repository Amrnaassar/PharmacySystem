TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER update_emp_name\nBEFORE INSERT ON Employee\nFOR EACH ROW\nSET NEW.fname = UPPER(NEW.fname)' 'CREATE DEFINER=`root`@`localhost` TRIGGER update_emp_last_name\nBEFORE INSERT ON Employee\nFOR EACH ROW\nSET NEW.lname = lower(NEW.lname)' 'CREATE DEFINER=`root`@`localhost` TRIGGER after_salaries_insert\nAFTER insert\nON Employee FOR EACH ROW\nUPDATE SalaryBudgets \nSET total = total + new.salary' 'CREATE DEFINER=`root`@`localhost` TRIGGER after_salaries_delete\nAFTER DELETE\nON Employee FOR EACH ROW\nUPDATE SalaryBudgets \nSET total = total - OLD.salary'
sql_modes=1098907648 1098907648 1098907648 1098907648
definers='root@localhost' 'root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
created=161256122210 161256122272 161256122257 161256122250
