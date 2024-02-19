insert into manage_student.tbstudent values('2151062791', N'Đào Xuân Hưng', '63CNTT4');
insert into manage_student.tbstudent values('2151060175', N'Nguyễn Tiến Dũng', '63CNTT4');
insert into manage_student.tbstudent values('1', N'Phan Tuấn Hưng', '63CNTT2');
delete from manage_student.tbstudent where msv = '2151060175';
select * from manage_student.tbstudent;
select * from manage_student.tbclass;
insert into manage_student.tbclass values(1, '63CNTT1'), (2, '63CNTT2'), (3, '63CNTT3'), (4, '63CNTT4');
delete from manage_student.tbclass;
select id, classname, count(class_name) as c from manage_student.tbstudent as std, manage_student.tbclass as cls where std.class_name = cls.classname group by cls.classname, cls.id; 

select id , classname, count(className) from manage_student.tbclass group by classname, id;
