<?php
	$server = "localhost:3306";
	$user = "root";
	$pass = "";
	$db = "batangoble_db";
	$conn = mysqli_connect($server, $user, $pass, $db);
	if(!$conn) die(mysqli_error($conn));

	$query = "CREATE TABLE STUDENT
	(
		APP_YR VARCHAR(4) NOT NULL,
		DATE_STARTED DATE,
		STUD_SEMESTER VARCHAR(20),
		STUD_ACADYEAR VARCHAR(20),
		STUD_LASTNAME VARCHAR(100) NOT NULL,
		STUD_FIRSTNAME VARCHAR(100) NOT NULL,
		STUD_MIDDLEINT VARCHAR(5),
		STUD_NICKNAME VARCHAR(100),
		STUD_BIRTHDAY DATE,
		STUD_ADDRESS VARCHAR(150),
		STUD_AGE VARCHAR(20) NOT NULL,
		STUD_SEX VARCHAR(10) NOT NULL,
		STUD_SCHEDTIME VARCHAR(50),
		STUD_SCHEDDAY VARCHAR(50),

		FATHER_LASTNAME VARCHAR(100),
		FATHER_FIRSTNAME VARCHAR(100),
		FATHER_MIDDLEINT VARCHAR(5),
		FATHER_TYPE VARCHAR(20),
		FATHER_AGE VARCHAR(20),
		FATHER_BIRTHDAY DATE,
		FATHER_OCCUPATION VARCHAR(50),
		FATHER_OFFICE VARCHAR(200),
		FATHER_CONTACT VARCHAR(11),
		FATHER_EMAIL VARCHAR(50),

		MOTHER_LASTNAME VARCHAR(100),
		MOTHER_FIRSTNAME VARCHAR(100),
		MOTHER_MIDDLEINT VARCHAR(5),
		MOTHER_TYPE VARCHAR(20),
		MOTHER_AGE VARCHAR(20),
		MOTHER_BIRTHDAY DATE,
		MOTHER_OCCUPATION VARCHAR(50),
		MOTHER_OFFICE VARCHAR(200),
		MOTHER_CONTACT VARCHAR(11),
		MOTHER_EMAIL VARCHAR(50),

		GUARDIAN_LASTNAME VARCHAR(100),
		GUARDIAN_FIRSTNAME VARCHAR(100),
		GUARDIAN_MIDDLEINT VARCHAR(5),
		GUARDIAN_TYPE VARCHAR(20),
		GUARDIAN_AGE VARCHAR(20),
		GUARDIAN_BIRTHDAY DATE,
		GUARDIAN_OCCUPATION VARCHAR(50),
		GUARDIAN_OFFICE VARCHAR(200),
		GUARDIAN_CONTACT VARCHAR(11),
		GUARDIAN_RELATION VARCHAR(50),

		MEDICALBG_ONE VARCHAR(1000),
		MEDICALBG_TWO VARCHAR(1000),
		MEDICALBG_THREE VARCHAR(1000),
		MEDICALBG_FOUR VARCHAR(1000),
		MEDICALBG_FIVE VARCHAR(1000),
		MEDICALBG_SIX VARCHAR(1000),
		MEDICALBG_SEVEN VARCHAR(1000),

		EMER_LASTNAME VARCHAR(100) NOT NULL,
		EMER_FIRSTNAME VARCHAR(100) NOT NULL,
		EMER_MIDDLEINT VARCHAR(5),
		EMER_ADDRESS VARCHAR(100) NOT NULL,
		EMER_CONTACT VARCHAR(11) NOT NULL,
		EMER_RELATION VARCHAR(50) NOT NULL,

		MODE_PAY VARCHAR(20) NOT NULL,
		AMT_PAID NUMERIC(8),
		DATE_PAID DATE,
		OR_NUM NUMERIC(20)

	)";
	mysqli_query($conn, $query);

	$query = "INSERT INTO STUDENT VALUES
		  ('2016', '2016-08-08', NULL, NULL, 'Addawe', 'Jove', NULL, 'Jove-Jove', '2015-04-29', '#826 Adiwang Rd., Dontogan, Baguio City', '1', 'Male', '8-5', 'Monday-Friday', 'Addawe', 'Joel', 'M', 'CS Faculty', '48', '1967-09-08', 'Professor', 'DMCS, CS', '09175062094', NULL, 'Addawe', 'Rizavel', 'C', 'CS Faculty', '45', '1971-05-23', 'Professor', 'DMCS, CS', '09175231971', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'None', '10 AM / 2 PM', NULL, NULL, NULL, 'Addawe', 'Joel', 'M', 'DMCS', '09175062094', 'Father', 'Drop-in', NULL, NULL, NULL),
		   ('2016', '2016-01-07', NULL, NULL, 'Baduyen', 'Karlson', 'C', NULL, '2012-07-02', 'Purok 2 Lualhati, Wright Park, Baguio City', '3', 'Female', 'All Day', NULL, 'Baduyen', 'Leo', NULL, NULL, '50', NULL, NULL, NULL, NULL, NULL, 'Caysoen', 'Hariet Lee', NULL, NULL, '30', '1985-12-01', 'OFW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'Spider, Mannequin', '1:30-3:00 PM', 'No', 'None', NULL, 'Caysoen', 'Jona', NULL, 'Purok 2 Lualhati, Wright Park, Baguio City', '09984444225', 'Aunt', 'Monthly', NULL, NULL, NULL),
		   ('2016', '2016-02-04', NULL, NULL, 'Ballesteros', 'Alijah Cerulean', 'F', 'Lean', '2014-04-09', '#16 Loro St., Dizon Subdivision, Baguio City', '2', 'Female', 'Whole day', NULL, 'Ballesteros', 'Philip', NULL, NULL, '29', '1986-06-06', 'Volunteer NGO Worker', NULL, NULL, NULL, 'Fenvelo', 'Sandra', NULL, NULL, '28', '1987-02-13', 'Volunteer NGO Worker', 'Regional Development Center - KADVAMI, Benguet Road, Baguio City', '09079224889', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', 'N/A', 'Enclosed spaces', '10 AM / 2 PM', 'N/A', 'N/A', NULL, 'Fenvelo', 'Debbie', NULL, 'Brgy. R. Balogo, Sorsogon City', '09178934485', 'Grandmother', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-01-07', NULL, NULL, 'Buh-way', 'Ryan Bert', 'M', NULL, '2015-07-11', 'Purok 1 Dntogan Green Valley, Baguio City', '1', 'Male', '8-4', 'Everyday', 'Buh-way', 'Robert', 'H.', NULL, '29', '1988-04-08', 'Mining', NULL, NULL, NULL, 'Buh-way', 'Annie', 'M', 'Utility-dependent', '28', '1988-05-22', 'Janitress / Utility', NULL, '09358031263', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'No', 'Noe', 'Yes, usually 9 AM and afteroon', 'No', 'No', NULL, 'Buhway', 'Annie', 'M', 'Purok 1 Dontogan Green Valley, Baguio City', '09358031263', 'Mother', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-02-17', NULL, NULL, 'Capadocia', 'Jarvis Edan Josh', 'D', NULL, '2014-02-10', '#227 Cresencia Village, Baguio City', '2', 'Male', NULL, NULL, 'Capadocia', 'Jordan Angelp', 'P', NULL, '21', '1994-10-10', NULL, NULL, '09055183798', NULL, 'Okag', 'Patricia Maye', 'S', NULL, '20', '1995-05-25', 'CSR', 'Convergys Baguio', '09057134971', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'Yes. Soy, blueberries, menthol, bitter gourd / ampalaya', 'No', 'Yes. 4 or 5 pm', 'No', 'G6PD Defficiency; allergy', NULL, 'Dilag', 'Patricia', NULL, '#227 Cresencia Village, Baguio City', '09208727397', 'Grandmother', 'Drop-in', NULL, NULL, '7667104'),
		    ('2016', '2016-01-20', NULL, NULL, 'Catapang', 'Clarence Josef', 'M', 'Clarence', '2011-12-12', '#181, Brgy #7, Poblacion, Gen. Luna Quezon / #224, SUello Village, Baguio City', '4', 'Male', NULL, NULL, 'Catapang', 'Chester', 'C', NULL, '26', '1989-07-09', 'Military Officer', 'Bravo Company, 351B, Patikul, Sulu', '09152320208', NULL, 'Catapang', 'Anna Lalaine', 'M', 'Student', '23', '1992-09-12', 'Student', 'CSS, UP Baguio', '09369283873', 'annalalaine.montero@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'Has sensitivity with smells; difficult to feed due to food smell', 'Yes. Loud sounds and dark places. He is also afraid of insects.', 'Afternoon nap, from 1pm - 3 pm at most.', 'No', 'None', NULL, 'Catapang', 'Anna Lalaine', 'M', '#224, SUello Village, Baguio City / CSS UPB', '09369283873', 'Mother', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-01-20', NULL, NULL, 'Catapang', 'Gabrielle Elise', 'M', 'Gabby', '2013-09-20', '#224 Suello Village, Baguio City', '3', 'Female', '10 AM - 2 PM', 'Tuesdays - Fridays', 'Catapang', 'Chester', 'C', NULL, '26', '1989-07-09', 'Military Officer', 'Bravo Company, 351B, Patikul, Sulu', '09152320208', NULL, 'Montero-Catapang', 'Anna Lalaine', 'R.', 'Student', '24', '1992-09-12', 'Student', 'CSS, UP Baguio', '09369283873', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'Ghosts, Dark places', 'Yes, after lunch', 'Yes, when she cannot understand how her toy operates/ if her playmates/caregiver won''t give her notice right away', 'None/seldom cries', NULL, 'Montero-Catapang', 'Anna Lalaine', 'R', '#224, Suello Village, Baguio City', '09369283873', 'Mother', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-01-15', NULL, NULL, 'Custodio', 'Calvin Lee', 'L', 'Bear', NULL, '#60 Unit 8 Ferguson Road, A. Bonifacio, Baguio City', '2', 'Male', 'TBA', 'TBA', 'Custodio', 'Wilvin', NULL, NULL, '33', '1981-01-24', 'Government Employee', 'Camp Tecson, San Miguel, Bulacan', '09175168605', NULL, 'Custodio', 'Judylyn', NULL, 'Student', '30', '1984-08-14', 'UPB IM Student', NULL, '09178795266', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes, around 10 or 11 AM', NULL, NULL, NULL, 'Custodio', 'Judylyn', NULL, '#60 Unit 8 Ferguson Road, A. Bonifacio, Baguio City', '09178795266', 'Mother', 'Drop-in', NULL, NULL, NULL),
		    ('2016', '2016-08-19', NULL, NULL, 'Enriquez', 'Mikaela Polaris', 'S', 'Mikaela', '2012-09-22', '28 Jasmin Road, San Luis Village, Baguio City', '4', 'Female', '10AM - 5PM', 'Monday, Tuesday, Thursday', 'Enriquez', 'Andrei', 'M', NULL, '35', '1980-06-07', 'Call Center Representative', '24/7 Makati', '09172595351', NULL, 'Enriquez', 'Armi Katrina', 'S', 'CS Faculty', '34', '1982-01-20', 'Instructor', 'Department of Physical Sciences, UPB', '09157824357', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Vitamins only (mixed in milk bottle. I premix it with the water, so no more need to add)', 'None', 'Yes, separation anxiety, very attached to mommy', 'Yes, usually around 1-2pm. But sometimes she doesn''t nap during the day.', 'No', 'No', NULL, 'Enriquez', 'Armi Katrina', 'S', '28 Jasmin Road, San Luis Village, Baguio City', '09157824357', 'Mother', 'Drop-in', NULL, NULL, NULL),
		    ('2016', '2016-11-10', NULL, NULL, 'Florendo', 'John Immanuel', NULL, 'Kylo', '2016-10-08', '181 Teacher''s Camp, Baguio City', '2 months', 'Male', '8-12 noon', 'Tuesday-Friday', 'Florendo', 'Jonathan', NULL, NULL, '42', '1974-03-12', 'College Professor', 'SLU Baguio', '09985396399', NULL, 'Florendo', 'Ma. Rosario', NULL, 'UPB Staff', '39', '1977-01-16', 'Faculty Member', 'CAC UP Baguio', '09985426982', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'No', 'no', 'Usually sleeps all morning', NULL, NULL, NULL, 'Florendo', 'Ma. Rosario', NULL, 'CAC', '09985426982', 'Mother', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-04-13', NULL, NULL, 'Floro', 'Ranier Dwayne', NULL, 'Nier/Rainier', '2009-05-29', 'URDHI', '7', 'Male', '9:45-4:30', 'Monday-Friday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Collado', 'Susan', NULL, 'Canteen worker', '41', '1973-08-08', 'Canteen Helper (Spices)', NULL, '09292630897', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'None', 'No nap time', 'Pag nagsawa na, ayaw na', NULL, NULL, 'Collado', 'Susan', NULL, 'URDHI/Spices Canteen', '09292630897', 'Mother', 'Drop-in', NULL, NULL, NULL),
		    ('2016', '2016-01-05', NULL, NULL, 'Gabatin', 'Jesica', 'L', 'Eca', '2014-04-08', 'Km. 5 Asin Road, Baguio City', '2', 'Female', NULL, NULL, 'Gabatin', 'Jesus', NULL, '', '49', '1967-12-25', 'None', NULL, '09128038684', NULL, 'Gabatin', 'Marylou', NULL, 'Utility', '39', '1977-03-29', 'Janitress', NULL, '09092340576', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'Yes, brushing her teeth and leaving him alone', 'Yes. 10:00 or 11:00 until 12:00 or 1:00', 'Yes, when she was scolded, shouted, and when she feels sleepy', NULL, NULL, 'Gabatin', 'Marylou', NULL, 'Km. 5 Asin Road, Baguio City', '09092340576', 'Mother', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-01-14', NULL, NULL, 'Guimpol', 'Beniea', NULL, 'Nia', NULL, '147 San Luis Ext. Naguilian Rd., Baguio City', '4', 'Female', '1:00-5:00PM', 'Monday-Friday', 'Guimpol', 'Benjie', '', NULL, '41', '1972-11-09', 'Freelance Technician / Entrepreneur', NULL, '09081507739', NULL, 'Guimpol', 'Jenny', 'D', 'Staff', '36', '1979-01-08', 'Government Employee', 'CAC', '09498628180', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes, Alnix for her rhinitis.', 'Yes, strong perfumes.', 'Yes, insects specificall mothe', 'Yes. 11 AM and 4 PM', 'Yes, if a playmate grabs/borrows her toys', 'None', NULL, 'Guimpol', 'Jenny', 'D', '147 San Luis Extension Naguilian Rd., Baguio City', '09498628180', 'Mother', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-01-12', NULL, NULL, 'Ibuna', 'Vito', NULL, 'Vito', '2012-12-23', '416 Albergo Villamor Drive Lualhati, Baguio City', '3 years', 'Female', '8 AM - 5 PM', 'Tuesday, Wednesday, Thursday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Canilao', 'Ceres', NULL, '', '30', '1984-11-29', 'Teacher, MA Student', 'UP Arts Studies, Graduate School', '09266719284', NULL, 'Canilao', 'Narcisa', 'P', 'CSS Faculty', NULL, NULL, NULL, 'Department of History and Philosophy, College of Social Sciences, UP Baguio', '09266719284', 'Grandmother', 'None - but he takes chewable multi-vitamins', 'None', NULL, 'Usually', 'Sometimes when he is sleepy', 'He had asthma when he was a baby - but he is overcoming it.', NULL, 'Canilao', 'Narcisa', 'P', 'Department of History and Philosophy, College of Social Sciences, UP Baguio', '09266719284', 'Grandmother', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-01-20', NULL, NULL, 'Ingente', 'Rebelle Ashlyn', 'L', 'Robyn', '2015-10-10', '30 Upper P. Burgos, Baguio City', '3 months', 'Female', '8:00-4:00pm', 'Tuesday and Friday', 'Ingente', 'Levi Glen', 'O', NULL, '22', '1993-10-03', 'NGO Worker / Staff', NULL, '09267966590', NULL, 'Lauzon', 'Angela Denise', 'P', 'Student', '19', '1996-09-17', 'Student', NULL, '09052120866', 'olgalauzon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'Sudden loud noises', 'Morning nap at 10 AM, at noon and afternoon nap at 2:30 PM', 'No', 'None', NULL, 'Lauzon', 'Angela Denise', 'P', '30 Upper P. Burgos, Baguio City', '09052120866', 'Mother', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-07-22', NULL, NULL, 'Jularbal', 'Maximillian', 'B', 'Max', '2015-09-02', '109 Camdas Subdivision, Baguio City', '10 months', 'Male', NULL, NULL, 'Jularbal', 'Io', 'M', 'Faculty', '35', '1980-09-10', 'CAC Faculty', 'CAC', '09163213466', NULL, 'Buen', 'Dianna Charisse', 'Q', NULL, '33', '1982-09-26', 'Home maker', NULL, '09152832538', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'None', 'Yes, every 3 - 3.5 hour', 'No', 'None', NULL, 'Jularbal', 'Io', 'M', 'Morning Glory Navybase', '09163213466', 'Father', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-04-14', NULL, NULL, 'Larosa', 'Aimee Belle', NULL, 'Aimee', '2011-06-02', '#5 Leonora Rivera, Andres Bonifacio, Baguio City', '4', 'Female', '1:00-4:30', 'Monday-Friday', 'Larosa', 'Avelino Jr.', NULL, NULL, '34', '1981-02-04', 'Government Employee', 'Baguio City Hall', '09275252904', 'mikopdar@gmail.com', 'Larosa', 'Christine Joy', 'U', 'Student', '28', '1987-12-03', 'Student', '', '09358579040', 'cjumali777@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'Allergic Rhinitis', 'None', 'Evening; Difficulty sleeping during day time', 'If someone will raise voice at her; Sensitive with loud and angry voice', 'None', NULL, 'Larosa', 'Avelino Jr.', NULL, '#5 Leonora Rivera, Andres Bonifacio, Baguio City', '09275252904', 'Father', 'Drop-in', NULL, NULL, NULL),
		    ('2016', '2016-04-14', NULL, NULL, 'Larosa', 'Micah Emmanuel', NULL, 'Emman', '2009-01-29', '#5 Leonora Rivera, Andres Bonifacio, Baguio City', '6', 'Male', '1:00-4:30', 'Monday-Friday', 'Larosa', 'Avelino Jr.', NULL, NULL, '34', '1981-02-04', 'Government Employee', 'Mayor''s Office, Baguio City Hall', '09275252904', 'mikopdar@gmail.com', 'Larosa', 'Christine Joy', 'U', 'Student', '28', '1987-12-03', 'Student', NULL, '09358579040', 'cjumali777@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'Allergic Rhinitis', 'None', 'Only during the evening / difficulty sleeping at daytime', 'If someone will raise voice at him', 'None', NULL, 'Larosa', 'Avelino Jr.', NULL, '#5 Leonora Rivera St., Andres Bonifacio, Baguio City', '09275252904', 'Father', 'Drop-in', NULL, NULL, NULL),
		    ('2016', '2016-01-06', NULL, NULL, 'Lazaro', 'Chloe Isabella Victoria', NULL, 'Chloe', '2012-01-13', 'Lot 15 Block 4 Ciudad Grande Phase 2 Bakakeng Norte, Baguio City', '3', 'Female', NULL, NULL, 'Lazaro', 'Carlito', 'D', NULL, '42', '1974-03-01', 'Bank Officer', NULL, '09277934628', 'carlito_lazaro@yahoo.com', 'Lazaro', 'Vanessa', 'A', 'Alumni', '39', '1977-11-24', 'Student', NULL, '09058131903', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'Yes, afraid of spiders and cockroaches (including toys)', 'Yes, around 11 AM and around 3 to 4 pm ; wakes up at 1 pm', 'No', 'None', NULL, 'Lazaro', 'Carlito', 'D', 'Lot 15 Block 4 Ciudad Grande Phase 2 Bakakeng Norte, Baguio City', '09277934628', 'Father', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-01-06', NULL, NULL, 'Ligligen', 'Loyd Maxzen', 'R', 'Max', '2012-08-14', '#216 Lot 153 Alta Verde Subdivision, Km. 6, Asin Road, Tuba Benguet', '3', 'Male', NULL, NULL, 'Ligligen', 'Barry Lloyd', NULL, NULL, '34', '1981-09-01', 'OFW', NULL, '09204061676', NULL, 'Ligligen', 'Sheryll', NULL, NULL, '34', '1981-04-07', 'Housewife', NULL, '09177773451', 'sherovillosligligen@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None / Vitamins aren''t given at home', 'None', 'Yes, Dark and big animals', 'No definite time / usually sleeps at 1 pm', 'No', 'None', NULL, 'Ligligen', 'Sheryll', 'R', '#216 Lot 153 Alta Verde Subdivision, Km. 6, Asin Road, Tuba Benguet', '09177773451', 'Mother', 'Monthly', NULL, NULL, NULL),
		    ('2016', '2016-01-06', NULL, NULL, 'Manuel', 'Erandio', 'G', 'Andio', '2011-01-27', '#9 A. Luna St., Roxas, Solano, Nueva Vizcaya', '5', 'Male', '', NULL, 'Manuel', 'Ryan', 'P', NULL, '33', '1982-11-16', 'Government Employee', 'NVSU - Bayombong, Nueva Vizcaya', NULL, NULL, 'Manuel', 'Arshiela', 'G', NULL, '33', '1982-08-12', 'Government Employee', 'NVSU - Bayombong, Nueva Vizcaya', '09255578548', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'None', '4PM', 'Yes, if he can''t get what he wants especially toys', 'Yes. ADHD.', NULL, 'Manuel', 'Arshiela', 'G', '#9 A. Luna St., Roxas, Solano, Nueva Vizcaya', '09062211347', 'Mother', 'Drop-in', NULL, NULL, NULL),
		    ('2016', '2016-01-06', NULL, NULL, 'Manuel', 'Raeka Haizea', 'G', 'Rek-rek', '2012-02-12', '#9 A. Luna St., Brgy. Roxas, Solano, Nueva Vizcaya', '4', 'Female', NULL, NULL, 'Manuel', 'Ryan', 'P', NULL, '33', '1982-11-16', 'Government Employee', 'NVSU - Bayombong, Nueva Vizcaya', NULL, NULL, 'Manuel', 'Arshiela', 'G', NULL, '33', '1982-08-12', 'Government Employee', 'NVSU - bayombong, Nueva Vizcaya', '09255578528', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'None', '4 PM', 'No', 'None', NULL, 'Manuel', 'Arshiela', 'G', '#9 A. Luna St., Brgy. Roxas, Solano, Nueva Vizcaya', '09062211347', 'Mother', 'Drop-in', NULL, NULL, NULL),
		     ('2016', '2016-09-19', 'First', '2015-2016', 'Pascua', 'Xancho', 'E', 'Xancho', '2013-12-08', '177 Teacher''s Camp, Baguio City', '2', 'Male', '8-5PM', 'Monday-Friday', 'Pascua', 'Ed', 'A', NULL, '33', '1983-10-03', 'Branch Manager', 'Radiowealth Finance Company', '09285999949', NULL, 'Pascua', 'Anna Bituin', 'E', 'Admin/REPS', '37', '1979-07-29', 'Admin Aide III', 'UP Baguio - Cash Office', '09154291701', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'None', 'None', 'None', 'Yes, after lunch', 'No', 'None', NULL, 'Pascua', 'Anna Bituin', 'E', '177 Teacher''s Camp, Baguio City', '09154291701', 'Mother', 'Monthly', '800', '2016-09-19', '1234567');";
	mysqli_query($conn, $query);

	$query = "CREATE TABLE PAYMENT(
		APP_YR VARCHAR(4) NOT NULL,
		DATE_STARTED DATE,
		STUD_LASTNAME VARCHAR(100) NOT NULL,
		STUD_FIRSTNAME VARCHAR(100) NOT NULL,
		STUD_MIDDLEINT VARCHAR(5),
		STUD_AGE VARCHAR(20) NOT NULL,
		STUD_SEX VARCHAR(10) NOT NULL,
		FATHER_TYPE VARCHAR(20),
		MOTHER_TYPE VARCHAR(20),
		GUARDIAN_TYPE VARCHAR(20),
	)";
	mysqli_query($conn, $query);



	$query = "CREATE TABLE PAYMENT(
		PAYMENT_TYPE VARCHAR(50) NOT NULL,
		PAYMENT_AMOUNT NUMERIC(8,2) NOT NULL,
		OUT_BAL NUMERIC(8,2),
		AMT_PAID NUMERIC(8,2),
		DATE_PAID DATE,
		OR_NUM NUMERIC(11),
		STUD_NAME VARCHAR(10) NOT NULL,

		/* DEPENDS ON THE TYPE OF ENROLLMENT STUFFERS
		LOAN_YEAR VARCHAR(10) NOT NULL,
		LOAN_SEM VARCHAR(3) NOT NULL,
		*/ 

		DATE_ADDED DATE NOT NULL,
		PAYMENT_REMARKS VARCHAR(200)
	)";
	mysqli_query($conn, $query);


	$query = "CREATE TABLE SA
	(
		SA_STUDNUM VARCHAR(10) NOT NULL,
		SA_LASTNAME VARCHAR(100) NOT NULL,
		SA_FIRSTNAME VARCHAR(100) NOT NULL,
		SA_MIDDLE VARCHAR(10),
		SA_COURSE VARCHAR(35) NOT NULL,
		SA_COLLEGE VARCHAR(10) NOT NULL,
		SA_YEAR VARCHAR(10) NOT NULL,
		SA_SEX VARCHAR(10) NOT NULL,
		SA_ADDRESS VARCHAR(100) NOT NULL,
		SA_EMAIL VARCHAR(50) NOT NULL,
		SA_CONTACT VARCHAR(11) NOT NULL,
		SA_HOURS VARCHAR(10) NOT NULL
	)";
	mysqli_query($conn, $query);

	$query = "INSERT INTO SA VALUES
		('2014-12345', 'Dela Cruz', 'Juan', 'P', 'BS Computer Science', 'CS', '4th Year', 'Male', '57 Engineers Hill, Baguio City', 'jpdelacruz@up.edu.ph', '09123456789', '50'),
		('2013-44557', 'Rizal', 'Josefa', 'D', 'BA Social Sciences (History)', 'CSS', '3rd Year', 'Female', '12 Teachers Camp, Baguio City', 'jdrizal@up.edu.ph', '09786423919', '32'),
		('2014-87000', 'Makiling', 'Maria', 'A', 'BS Biology', 'CS', '4th Year', 'Female', '24 Asin Road, Baguio City', 'makiling_maria@gmail.com', '09103839224', '40'),
		('2013', 'Bonifacio', 'Andrea', 'M', 'BA Communication', 'CAC', 'Others', 'Female', '89 Leonard Wood Road, Baguio City', 'ambonifacio@up.edu.ph', '09322198313', '23');";

	mysqli_query($conn, $query);


	$query = "CREATE TABLE STUD_HISTORY(
		STUD_LNAME VARCHAR(100) NOT NULL,
		STUD_FNAME VARCHAR(100) NOT NULL,
		STUD_MIDINT VARCHAR(100) NOT NULL,
		PAYMENT_MODE VARCHAR(50) NOT NULL,
		AMT_PAID NUMERIC(8),
		DATE_PAID DATE,
		OR_NUM NUMERIC(20),
		APP_YEAR VARCHAR(10) NOT NULL
	)";
	mysqli_query($conn, $query);
	mysqli_query($conn, $query);

	$query = "INSERT INTO STUD_HISTORY VALUES
		('Anongos','Seth Chadlos', 'B', 'Monthly',NULL,NULL,NULL,'2015')";
	mysqli_query($conn, $query);

?>