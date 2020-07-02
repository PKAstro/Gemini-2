<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Frequency Asked Questions About Gemini 1</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />



<?php include("topv.php"); ?>




</head>

<body style="color: #FFFFFF; background-color: #000000">

<p class="h1">
<table align="center" cellspacing="1" style="width: 80%">
	<tr>
		<td class="h2">
		List of the CGI coded used in the Gemini 2 Web pages

		</td>
	</tr>
	<tr>
		<td class="style6">
			<br />
			<a href="https://groups.io/g/Gemini-II/files/Documentation_and_Manuals/CGIcodes.txt" target="_blank">
			The Most Current CGIcodes.txt files is on Gemini 2 Users Group, but requires membership to access</a>
			<br />

		</td>
	</tr>
	<tr>
		<td class="style6">
			The Following is a copy of the Rev. 0.91 Version posted by René Görlich on March 27,2011
			<br/><br/>
		
		</td>
	</tr>
	<tr>
		<td class="style6">
						<br /><br />

			Gemini-II web interface
			<br /><br />

			-----------------------
			<br /><br />

			Rev. 0.91 - March 27, 2011
			<br /><br />

			<br />
			1. Introduction
			<br /><br />

			Gemini&#39;s internal web server accesses files on the SD card. Only 
			very few pages, like an initial index.htm and error pages are held 
			in the code. This gives the user the possibility to customize the 
			web interface at will. He can put static files on the SD card (HTML, 
			JPEG, PNG, ...) if the browser can interpret them correctly.
			<br /><br />

			Important to find the files is their location. Currently Gemini&#39;s 
			web server supports three languages: English, German and French. For 
			these languages, directories EN, DE and FR exists on the SD card, 
			which contain the web pages in the respective languages.
			<br /><br />

			Whenever a web page is requested, the web server examines the 
			language code in the HTTP header the browser sent according to its 
			setup, changes to the directory (or defaults to EN if the language 
			is not (yet) supported and tries to open the file. If this is 
			successful and the file name extension does not mark it as a dynamic 
			html file, the file content is transmitted to the browser.
			<br /><br />

			All commands and parameters described below are case sensitive!
			<br /><br />

			2. Dynamic .cgi files
			<br /><br />

			2.1. Format description
			<br /><br />

			These files are analyzed and interpreted line by line. A line 
			must not exceed 120 characters.
			<br /><br />

			Each line starts with a character describing how to to interpret 
			it:
			<br /><br />

			&#39;#&#39; A hash mark tells the interpreter to ignore this line
			<br /><br />

			&#39;t&#39; Text. The line will be sent to the browser without any 
			changes
			<br /><br />

			&#39;i&#39; This line will be replaced by the file with the given name 
			included,
			<br /><br />

			&#39;c&#39; This line will be interpreted, the output will be dynamically 
			build.
			<br /><br />

			&#39;.&#39; End of file.
			<br /><br />

			Lines starting with the character &#39;c&#39; will have some more 
			characters following determining how to interpret them. The second 
			character will be ignored, the third character will be used for the 
			first and most important selection. Depending on this, the fifth 
			character may be used as a secondary choice.
			<br /><br />

			Dynamic files are examined and the returned content is generated 
			at runtime. If you don&#39;t want to build your own .cgi-file, there&#39;s a 
			dummy file &quot;command.cgi&quot; included in the Gemini firmware image, that 
			allows to work with the parameters given below.
			<br /><br />

			2.2 cgi file parameter list
			<br /><br />

			&#39;a&#39; Network parameters
			<br /><br />

			i current IP address
			<br /><br />

			m current netmask
			<br /><br />

			g current default gateway
			<br /><br />

			p current primary DNS server
			<br /><br />

			q current secondary DNS server
			<br /><br />

			I static IP address
			<br /><br />

			M static netmask
			<br /><br />

			G static default gateway
			<br /><br />

			P static primary DNS server
			<br /><br />

			Q static secondary DNS server
			<br /><br />

			T DHCP timeout span
			<br /><br />

			&#39;A&#39; A/D (battery, 12V, Feature port)
			<br /><br />

			1
			<br /><br />

			..
			<br /><br />

			6
			<br /><br />

			&#39;b&#39; Default Boot mode
			<br /><br />

			0
			<br /><br />

			..
			<br /><br />

			3
			<br /><br />

			&#39;B&#39; Preferred Browser language
			<br /><br />

			&#39;C&#39; Coordinates
			<br /><br />

			p current PRA position
			<br /><br />

			q current DEC position
			<br /><br />

			r current apparent RA position
			<br /><br />

			d current apparent DEC position
			<br /><br />

			i current telescopic RA position
			<br /><br />

			j current telescopic DEC position
			<br /><br />

			R target RA position
			<br /><br />

			D target DEC position
			<br /><br />

			a current Az position
			<br /><br />

			e current El position
			<br /><br />

			A target Az position
			<br /><br />

			E target El position
			<br /><br />

			n target name
			<br /><br />

			s apparent target TRA position
			<br /><br />

			t apparent target TDEC position
			<br /><br />

			h telescopic target TRA position
			<br /><br />

			m telescopic target TDEC position
			<br /><br />

			u difference target RA - telescope RA
			<br /><br />

			v difference target DEC - telescope DEC
			<br /><br />

			U difference unmodelled target RA - telescope RA
			<br /><br />

			V difference unmodelled target DEC - telescope DEC
			<br /><br />

			S Serial Emulator output string
			<br /><br />

			&#39;c&#39; TCP status
			<br /><br />

			&#39;D&#39; Databases
			<br /><br />

			D name of current directory
			<br /><br />

			d complete directory
			<br /><br />

			f catalog files directory
			<br /><br />

			F catalogue files
			<br /><br />

			t catalogue content
			<br /><br />

			S object selection
			<br /><br />

			s flash chip selection
			<br /><br />

			i object info (state.cgi)
			<br /><br /><br />
			
			&#39;d&#39; System password - file &#39;system.cgi&#39;
			<br /><br />

			&#39;E&#39; Motor encoder resolution
			<br /><br />

			R
			<br /><br />

			D
			<br /><br />

			&#39;e&#39; Encoder Port Usage
			<br /><br />

			&#39;F&#39; Firmware
			<br /><br />

			f SD card label
			<br /><br />

			i current firmware info
			<br /><br />

			B firmware .bin file names
			<br /><br />

			b firmware .bin file directory entries
			<br /><br />

			s board serial #
			<br /><br />

			&#39;h&#39; HC mode
			<br /><br />

			0 Visual Mode
			<br /><br />

			1 Photo Mode
			<br /><br />

			2 All Speeds Mode
			<br /><br />

			&#39;I&#39; Information
			<br /><br />

			&#39;I&#39; Information Buffer Content
			<br /><br />

			&#39;H&#39; Hand Controller Display
			<br /><br />

			&#39;S&#39; Serial emulation return string
			<br /><br />

			&#39;i&#39; returns currently selected site (1..4)
			<br /><br />

			&#39;L&#39; Safety Limits in steps
			<br /><br />

			r right
			<br /><br />

			l left
			<br /><br />

			g Western GoTo Limit
			<br /><br />

			t Time to western limit
			<br /><br />

			&#39;l&#39; Browser Language - file &#39;language.cgi&#39;
			<br /><br />

			&#39;M&#39; Gearing:
			<br /><br />

			W RA worm ratio
			<br /><br />

			w DEC ...
			<br /><br />

			S RA spur ratio
			<br /><br />

			s DEC ...
			<br /><br />

			R RA motor nominal encoder resolution
			<br /><br />

			r DEC
			<br /><br />

			A RA step size (floating point)
			<br /><br />

			a DEC ...
			<br /><br />

			T DEC TVC step count
			<br /><br />

			&#39;m&#39; mount type
			<br /><br />

			0
			<br /><br />

			..
			<br /><br />

			6
			<br /><br />

			&#39;n&#39; tracking rate selection
			<br /><br />

			0 Sidereal
			<br /><br />

			1 King
			<br /><br />

			2 Lunar
			<br /><br />

			3 Solar
			<br /><br />

			4 Terrestrial
			<br /><br />

			5 Closed Loop
			<br /><br />

			6 Comet/User Defined
			<br /><br />

			&#39;O&#39; Object
			<br /><br />

			&#39;n&#39; name of selected object or &quot;---&quot;
			<br /><br />

			&#39;Q&#39; Number of currently selected telescope pointing model
			<br /><br />

			&#39;P&#39; Model parameters
			<br /><br />

			E Alignment count in the East
			<br /><br />

			W ... West
			<br /><br />

			a Azimuth
			<br /><br />

			e Elevation
			<br /><br />

			c Non-Polarity at the Meridian
			<br /><br />

			n Non-Polarity at the Pole
			<br /><br />

			h Index error in HA
			<br /><br />

			d Index error in DEC
			<br /><br />

			t Tubve Flexure
			<br /><br />

			C Counterweight flexure
			<br /><br />

			0..9 currently selected model
			<br /><br />

			&#39;p&#39; serial port setings - file &#39;serial.cgi
			<br /><br />

			&#39;q&#39; GPS port
			<br /><br />

			&#39;
			<br /><br />

			&#39;S&#39; Safety Limits in degrees/minutes
			<br /><br />

			r right
			<br /><br />

			l left
			<br /><br />

			g WestGoToLimit
			<br /><br />

			&#39;s&#39; Site Settings
			<br /><br />

			n name of site
			<br /><br />

			t timezone
			<br /><br />

			o longitude
			<br /><br />

			a latitude
			<br /><br />

			e elevation
			<br /><br />

			# site number
			<br /><br /><br />

			&#39;T&#39; time:
			<br /><br />

			U UTC date
			<br /><br />

			u UTC time
			<br /><br />

			C Civil Date
			<br /><br />

			c Civil time
			<br /><br />

			s Sidereal time
			<br /><br />

			m Julian Date (floating poit)
			<br /><br />

			&#39;t&#39; moving mode
			<br /><br />

			x RA axis state, f.i. currently active tracking rate
			<br /><br />

			(sidereal, solar, lunar, terrestrial, comet, ...),
			<br /><br />

			Slewing, No Motion, Centering, Guiding, STALL (language-dependend 
			string)
			<br /><br />

			y DEC axis state...
			<br /><br />

			&#39;V&#39; Velocities:
			<br /><br />

			S Manual Slewing RA
			<br /><br />

			s Manual Slewing DEC
			<br /><br />

			M Move Speed RA
			<br /><br />

			m Move Speed DEC
			<br /><br />

			T GoTo Slewing RA
			<br /><br />

			t GoTo Slewing DEC
			<br /><br />

			A Slewing Acceleration RA
			<br /><br />

			a Slewing Acceleration DEC
			<br /><br />

			C Centering RA
			<br /><br />

			c Centering DEC
			<br /><br />

			G Guiding RA
			<br /><br />

			g Guiding DEC
			<br /><br />

			&#39;z&#39; State (may be expanded later, please test single bits)
			<br /><br />

			0 currently waiting for startup mode selection
			<br /><br />

			1 Gemini started up
			<br /><br />

						<br /><br />

			2.3 Serial Port Emulator
			<br /><br />

			This emulator bridges the gap between the HTTP-based web 
			interface and the serial command. Commands sent as string value of 
			the SE= parameter are executed by the serial command interpreter. It 
			is possible to send several serial commands at once, but it must be 
			assured that the responses not exceed 64 byte, the length of a 
			special output buffer for the interpreter. This output can be 
			obtained with the cgi command line &quot;c C S %s&quot;.
			<br /><br />
			<br /><br />

			2.4 Forms input
			<br /><br />

			2.4.1 POST parameter
			<br /><br />

			Only used for file uploading and SD card formating so far.
			<br /><br />

			2.4.2 GET parameter
			<br /><br />

			Syntax:
			<br /><br />

			Sometimes the command strings don&#39;t need and examine parameter 
			values given (nothing noted after the equal sign), but most commands 
			need them formed exactly as described below in C-printf syntax:
			<br /><br />

			%d integer
			<br /><br />

			%u unsigned integer
			<br /><br />

			%f floating point number
			<br /><br />

			%s string
			<br /><br />

			All other characters have to appear exactly as they are shown.
			<br /><br />

			Parameter list:
			<br /><br />

			MR=e Move Eastward
			<br /><br />

			MR=w Move Westward
			<br /><br />

			MR=q Stop moving RA
			<br /><br />

			MD=n Move Northward
			<br /><br />

			MD=s Move Southward
			<br /><br />

			MD=q Stop moving DEC
			<br /><br />

			PH= Park at Home Position
			<br /><br />

			Ph= Set Home Position
			<br /><br />

			PC= Park at CWD Position
			<br /><br />

			PS= Sleep Telescope
			<br /><br />

			PW= Wakeup Telescope
				<br /><br /><br />

			hc=0..2 Set Hand Controler into Visual (0), Photo(1) or All Speed 
			Mode
			<br /><br />

			ts=0..6 Set Tracking Mode (Sidereal ,King, ...)
			<br /><br />

			du=&quot;%u.%u.%u&quot; UTC Date
			<br /><br />

			dc=&quot;%u.%u.%u&quot; Civil Date
			<br /><br />

			tu=&quot;%u:%u:%u&quot; UTC Time
			<br /><br />

			tc=&quot;%u:%u:%u&quot; Civil Time
			<br /><br />

			tr=&quot;%u:%u:%u&quot; Target Right Ascension
			<br /><br />

			td=&quot;%d:%u:%u&quot; Target Declination
			<br /><br />

			tR=&quot;%u&quot; Target Physical Right Ascension
			<br /><br />

			tD=&quot;%u&quot; Target Physical Declination
			<br /><br />

			ta=&quot;%d:%u:%u&quot; Target Azimuth
			<br /><br />

			te=&quot;%u:%u:%u&quot; Target Elevation
			<br /><br />

			mn=&quot;%u&quot; Current model number 0..1
			<br /><br />

			sm=&quot;%u&quot; Store current model under number 0..1
			<br /><br />

			cm=&quot;%u&quot; clear model number #
			<br /><br />

			aa= Additional Alignment
			<br /><br />

			Sm= Synchronize
			<br /><br />

			ia= Initial Alignment
			<br /><br />

			mt=&quot;%u&quot; mount type
			<br /><br />

			wr=&quot;%d&quot; Worm ratio in right ascension
			<br /><br />

			wd=&quot;%d&quot; Worm ratio in declination
			<br /><br />

			sr=&quot;%u&quot; Spur ratio in right ascension
			<br /><br />

			sd=&quot;%u&quot; Spur ratio in declination
			<br /><br />

			mr=&quot;%u&quot; Motor encoder resolution in right ascension
			<br /><br />

			md=&quot;%u&quot; Motor encoder resolution in declination
			<br /><br />

			dt=&quot;%u&quot; DEC TVC step count
			<br /><br />

			R1=&quot;%c&quot; Move Speed: G=Guide, C=Center, M=Move, S=Slew
			<br /><br />

			VM=&quot;%d&quot; Manual Slewing Speed RA
			<br /><br />

			Vm=&quot;%d&quot; Manual Slewing Speed DEC
			<br /><br />

			VT=&quot;%d&quot; GoTo Slewing Speed RA
			<br /><br />

			Vt=&quot;%d&quot; GoTo Slewing Speed DEC
			<br /><br />

			VV=&quot;%d&quot; Move Speed RA
			<br /><br />

			Vv=&quot;%d&quot; Move Speed DEC
			<br /><br />

			Vi=&quot;%d&quot; Increment Move Speeds by the given value. If omitted, 
			default is 50.
			<br /><br />

			Vd=&quot;%d&quot; Decrement Move Speeds by the given value. If omitted, 
			default is 50.
			<br /><br />

			VA=&quot;%f&quot; RA Slewing Acceleration
			<br /><br />

			Va=&quot;%f&quot; DEC Slewing Acceleration
			<br /><br />

			VC=&quot;%u&quot; RA Centering Speed
			<br /><br />

			Vc=&quot;%u&quot; DEC Centering Speed
			<br /><br />

			VG=&quot;%u.%u&quot; RA Guiding Speed
			<br /><br />

			Vg=&quot;%u.%u&quot; DEC Guiding Speed
			<br /><br />

			Sr=&quot;%u°%u&quot; Right Safety Limit
			<br /><br />

			Sl=&quot;%u°%u&quot; Left Safety Limit
			<br /><br />

			Sg=&quot;%u°%u&quot; Western GoTo Limit
			<br /><br />

			ER=&quot;%d&quot; Axis Encoder RA resolution
			<br /><br />

			ED=&quot;%d&quot; Axis Encoder DEC resolution
			<br /><br />

			ep=&quot;%u&quot; encoder port usage, 0..15
			<br /><br />

			si=&quot;%u&quot; select location
			<br /><br />

			sn=&quot;%s&quot; site name
			<br /><br />

			st=&quot;%d:%u:%u&quot; Timezone (minutes and seconds can be omitted)
			<br /><br />

			so=&quot;%d°%u&#39;%u&quot; Longitude
			<br /><br />

			sa=&quot;%d°%u&#39;%u&quot; Latitude
			<br /><br />

			se=&quot;%d&quot; Elevation
			<br /><br />

			s#=&quot;%u&quot; site number
			<br /><br />

			gp=&quot;%u&quot; Query GPS receiver at serial ports 0..3
			<br /><br />

			bm=&quot;%u&quot; default boot mode, 0..3 for Cold Start, Warm Start, Warm 
			Restart, Ask, if possible
			<br /><br />

			bo=&quot;%u&quot; select boot mode, 0..2 for Cold Start, Warm Start, Warm 
			Restart
			<br /><br />

			s0=&quot;%u&quot; Baud rate selection, serial port 0
			<br /><br />

			s1=&quot;%u&quot; Baud rate selection, serial port 1
			<br /><br />

			s2=&quot;%u&quot; Baud rate selection, serial port 2
			<br /><br />

			s3=&quot;%u&quot; Baud rate selection, serial port 3
			<br /><br />

			sg=&quot;%u&quot; Baud rate selection for GPS receiver
			<br /><br />

			ct=&quot;%u&quot; Catalog selection (active catalog file id)
			<br /><br />

			ff=&quot;%u&quot; Firmware flashing (selected firmware file id)
			<br /><br />

			CN=&quot;%s&quot; Catalog Name selection
			<br /><br />

			DN=&quot;%s&quot; Directory to change to
			<br /><br />

			co=&quot;%s&quot; Catalog object string
			<br /><br />

			SO=&quot;%u&quot; Solar System object number (Sun=0, ...)
			<br /><br />

			gtf= enforce meridian flip
			<br /><br />

			GT= start GoTo
			<br /><br />

			GP= start Physical GoTo
			<br /><br />

			GA= start Alt/Az GoTo
			<br /><br />

			prec=&quot;%u&quot; always precess (&#39;1&#39;) given coordinates or not (&#39;0&#39;)
			<br /><br />

			sdo= precess given object coordinates
			<br /><br />

			ip=&quot;%u.%u.%u.%u&quot; current IP Address
			<br /><br />

			msk=&quot;%u.%u.%u.%u&quot; current IP Netmask
			<br /><br />

			gw=&quot;%u.%u.%u.%u&quot; current IP default gateway
			<br /><br />

			pdns&quot;&quot;%u.%u.%u.%u&quot; current Primary DNS server
			<br /><br />

			sdns&quot;&quot;%u.%u.%u.%u&quot; current Secondary DNS server
			<br /><br />

			Ip=&quot;%u.%u.%u.%u&quot; static IP Address
			<br /><br />

			Msk=&quot;%u.%u.%u.%u&quot; static IP Netmask
			<br /><br />

			Gw=&quot;%u.%u.%u.%u&quot; static IP default gateway
			<br /><br />

			Pdns&quot;&quot;%u.%u.%u.%u&quot; static Primary DNS server
			<br /><br />

			Sdns&quot;&quot;%u.%u.%u.%u&quot; static Secondary DNS server			<br /><br /><br />

			3. Character encoding
			<br /><br />

			Gemini-II supports internationalized messages. Special characters 
			have to be displayed by the HC, browsers as well as they have to be 
			exchanged between browser.
			<br /><br />

			Several characters can be encoded in ISO/IEC 8859 form, f.i. the 
			German and French characters.
			<br /><br />

			The graphical HC supports XML encoded Greek lowercase characters:
			<br /><br />

			alpha &amp;#945;
			<br /><br />

			beta &amp;#946;
			<br /><br />

			gamma &amp;#947;
			<br /><br />

			delta &amp;#948;
			<br /><br />

			epsilon &amp;#949;
			<br /><br />

			... until ...
			<br /><br />

			omega &amp;#969;
			<br /><br />

			The HC also supports the common German anf French special 
			characters. <br />
						<br />
						------- New version below -----<br />
						<br />
						<br />
						Gemini-II web interface<br />
						-----------------------<br />
						Rev. 1.04 - Jul 22, 2015<br />
						<br />
						<br />
						1. Introduction<br />
						<br />
						Gemini's internal web server searches the files 
						requested by the HTTP URLs first on the SD card. Only 
						very few pages, like an initial index.htm, sd.cgi and 
						error pages are stored hard-coded in the firmware as a 
						fallback if the SD card is empty, freshly formatted or 
						faulty. This gives the user the possibility to customize 
						the web interface at will. He can put static files on 
						the SD card (HTML, JPEG, PNG, ...) if the browser can 
						interpret them correctly. <br />
						<br />
						Important to find the files is their location. Currently 
						Gemini's web server supports four languages: English, 
						German, French and Spanish. For these languages, 
						directories EN, DE, FR and ES exist on the SD card, 
						which contain the web pages in the respective languages.<br />
						<br />
						Whenever a web page is requested, the web server 
						examines the language code in the HTTP header the 
						browser sent according to its setup, changes to the 
						directory (or defaults to EN if the language is not 
						(yet) supported and tries to open the file. If this is 
						successful and the file name extension does not mark it 
						as a dynamic HTML file, the file content is transmitted 
						to the browser.<br />
						<br />
						All commands and parameters described below are case 
						sensitive!<br />
						<br />
						<br />
						2. Dynamic .cgi files<br />
						2.1. Format description<br />
						<br />
						These files are analyzed and interpreted line by line. A 
						line must not exceed 120 characters. <br />
						Each line starts with a character describing how to to 
						interpret it:<br />
						<br />
&emsp;&emsp;&emsp;&emsp; '#'&emsp;&emsp;&emsp;&emsp; A hash mark tells the 
						interpreter to ignore this line<br />
&emsp;&emsp;&emsp;&emsp; 't'&emsp;&emsp;&emsp;&emsp;&emsp; Text. The line will 
						be sent to the browser without any changes<br />
&emsp;&emsp;&emsp;&emsp; 'i'&emsp;&emsp;&emsp;&emsp;&emsp; This line will be 
						replaced by the file with the given name included,<br />
&emsp;&emsp;&emsp;&emsp; 'c'&emsp;&emsp;&emsp;&emsp;&emsp; This line will be 
						interpreted, the output will be dynamically build. <br />
&emsp;&emsp;&emsp;&emsp; '.'&emsp;&emsp;&emsp;&emsp;&emsp; End of file.<br />
						<br />
						Lines starting with the character 'c' will have some 
						more characters following determining how to interpret 
						them. The second character will be ignored, the third 
						character will be used for the first and most important 
						selection. Depending on this, the fifth character may be 
						used as a secondary choice.<br />
						<br />
						Dynamic files are examined and the returned content is 
						generated at runtime. If you don't want to build your 
						own .cgi-file, there's a dummy file "command.cgi" 
						included in the Gemini firmware image, that allows to 
						work with the parameters given below.<br />
						<br />
						2.2 cgi file parameter list<br />
						<br />
						&emsp;&emsp;&emsp;&emsp;'a'&emsp;&emsp;&emsp;&emsp;&emsp; Network parameters<br />
						&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;i&emsp;&emsp;&emsp;&emsp; current IP address<br	 />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;m &emsp;&emsp;&emsp;&emsp; current netmask<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;g &emsp;&emsp;&emsp;&emsp; current default gateway<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;p &emsp;&emsp;&emsp;&emsp; current primary DNS server<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;q &emsp;&emsp;&emsp;&emsp; current secondary DNS server<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;a &emsp;&emsp;&emsp;&emsp;current MAC address<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;I &emsp;&emsp;&emsp;&emsp;static IP address<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;M &emsp;&emsp;&emsp;&emsp;static netmask<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;G &emsp;&emsp;&emsp;&emsp;static default gateway<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;P &emsp;&emsp;&emsp;&emsp;static primary DNS server<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Q &emsp;&emsp;&emsp;&emsp;static secondary DNS server<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;A &emsp;&emsp;&emsp;&emsp;static MAC address<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;T &emsp;&emsp;&emsp;&emsp;DHCP timeout span<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;d &emsp;&emsp;&emsp;&emsp;displays "checked" if DHCP is selected<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;U &emsp;&emsp;&emsp;&emsp;UDP Port number <br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;u &emsp;&emsp;&emsp;&emsp;accepted IP address for UDP communication or 0 for all<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;t &emsp;&emsp;&emsp;&emsp;TCP Port number for transparent BSD socket<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;c &emsp;&emsp;&emsp;&emsp;accepted IP address for TCP BSD socket or 0 for all<br />
						<br />
						&emsp;&emsp;&emsp;&emsp;'A' A/D (battery, 12V, Feature port)<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;..<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;6<br />
						<br />
						&emsp;&emsp;&emsp;&emsp;'b' Default Boot mode<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;..<br />
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;3<br />
						<br />
						'B' Preferred Browser language<br />
						<br />
						'C' Coordinates<br />
						p current PRA position<br />
						q current DEC position<br />
						r current apparent RA position<br />
						d current apparent DEC position<br />
						i current telescopic RA position<br />
						j current telescopic DEC position<br />
						R target RA position<br />
						D target DEC position<br />
						a current Az position<br />
						e current El position<br />
						A target Az position<br />
						E target El position<br />
						n target name<br />
						s apparent target TRA position<br />
						t apparent target TDEC position<br />
						h telescopic target TRA position<br />
						m telescopic target TDEC position<br />
						u difference target RA - telescope RA<br />
						v difference target DEC - telescope DEC<br />
						U difference unmodelled target RA - telescope RA<br />
						V difference unmodelled target DEC - telescope DEC<br />
						Y current RA worm PEC pointer position<br />
						S Serial Emulator output string<br />
						'c' TCP status<br />
						<br />
						'D' Databases<br />
						D name of current directory <br />
						d complete directory<br />
						f catalog files directory<br />
						F catalogue files<br />
						t catalogue content<br />
						S object selection<br />
						s flash chip selection<br />
						i object info (state.cgi)<br />
						<br />
						'd' System password - file 'system.cgi'<br />
						<br />
						'E' Axis encoder<br />
						R resolution X / RA<br />
						D resolution Y / DEC<br />
						r current value X / RA<br />
						d current value Y / DEC<br />
						x X / RA readout errors<br />
						y Y / RA readout errors<br />
						<br />
						'e' Encoder Port Usage<br />
						<br />
						'F' Firmware<br />
						f SD card label<br />
						i current firmware info<br />
						B firmware .bin file names<br />
						b firmware .bin file directory entries<br />
						s board serial #<br />
						<br />
						'g' Graphic HC brightness<br />
						'G' Graphic HC color scheme<br />
						<br />
						'H' Hardware<br />
						S Get Serial Number<br />
						<br />
						'h' Classic HC mode<br />
						0 Visual Mode<br />
						1 Photo Mode<br />
						2 All Speeds Mode<br />
						<br />
						'I' Information<br />
						'I' Information Buffer Content<br />
						'H' Hand Controller Display<br />
						'S' Serial emulation return string<br />
						'i' returns currently selected site (1..4)<br />
						<br />
						'K' returns current Parking mode preselection (0..2)<br />
						<br />
						'k' returns current PEC state<br />
						<br />
						'L' Safety Limits in steps<br />
						r right<br />
						l left<br />
						g Western GoTo Limit<br />
						t Time to western limit <br />
						'l' Browser Language - file 'language.cgi'<br />
						<br />
						'M' Gearing: <br />
						W RA worm ratio<br />
						w DEC ...<br />
						S RA spur ratio (unsigned int)<br />
						s DEC ...<br />
						X RA spur ratio (double)<br />
						Y DEC ...<br />
						R RA motor nominal encoder resolution<br />
						r DEC<br />
						A RA step size (double)<br />
						a DEC ...<br />
						T DEC TVC step count<br />
						'm' Mount Type <br />
						0<br />
						..<br />
						6<br />
						<br />
						'N' Mount Design<br />
						0 (German) Equtorial<br />
						1 Alt/Az<br />
						<br />
						<br />
						'n' tracking rate selection<br />
						0 Sidereal<br />
						1 King<br />
						2 Lunar<br />
						3 Solar<br />
						4 Terrestrial<br />
						5 Closed Loop<br />
						6 Comet/User Defined<br />
						'O' Object<br />
						'n' name of selected object or "---"<br />
						<br />
						'Q' Filename to store the currently selected telescope 
						pointing model<br />
						<br />
						'P' Model parameters<br />
						E Alignment count in the East<br />
						W ... West<br />
						a Azimuth<br />
						e Elevation<br />
						c Non-Polarity at the Meridian<br />
						n Non-Polarity at the Pole<br />
						h Index error in HA<br />
						d Index error in DEC<br />
						t Tube Flexure<br />
						C Counterweight flexure<br />
						F Flip in RA<br />
						f Flip in DEC<br />
						0..1 currently selected model<br />
						s swap :CM# and :Cm#<br />
						<br />
						'p' serial port setings - file 'serial.cgi<br />
						<br />
						'Q' Parking mode preselection<br />
						0 Unpark on any Move command<br />
						1 Unpark on GoTo or Unpark commands<br />
						2 Unpark only after Unpark command<br />
						<br />
						'q' GPS port<br />
						<br />
						'R' Axis Movement<br />
						r RA/AZ<br />
						d DEC/EL<br />
						<br />
						'S' Safety Limits in degrees/minutes<br />
						r right<br />
						l left<br />
						g WestGoToLimit <br />
						's' Site Settings<br />
						n name of site<br />
						t timezone<br />
						o longitude<br />
						a latitude<br />
						e elevation<br />
						# site number<br />
						<br />
						'T' time: <br />
						U UTC date<br />
						u UTC time<br />
						C Civil Date<br />
						c Civil time<br />
						s Sidereal time<br />
						m Julian Date (floating poit)<br />
						't' moving mode<br />
						x RA axis state, f.i. currently active tracking rate
						<br />
						(sidereal, solar, lunar, terrestrial, comet, ...), <br />
						Slewing, No Motion, Centering, Guiding, STALL (language-dependend 
						string)<br />
						y DEC axis state...<br />
						L RA axis lag [steps], range -400..400<br />
						l DEC axis lag [steps], range -400..400<br />
						P RA motor PWM duty cycle, -100..100<br />
						p DEC motor PWM duty cycle, -100..100<br />
						T warning treshold for offset in RA/Az while holding 
						position/guiding/tracking<br />
						t warning treshold for offset in DEC/El while holding 
						position/guiding/tracking<br />
						H warning treshold for heavy load (high PWM duty cycle) 
						in RA/Az while holding position/guiding/tracking<br />
						h warning treshold for heavy load (high PWM duty cycle) 
						in DEC/El while holding position/guiding/tracking<br />
						S warning treshold for heavy load (high PWM duty cycle) 
						in RA/Az while slewing<br />
						s warning treshold for heavy load (high PWM duty cycle) 
						in DEC/El while slewing<br />
						<br />
						'V' Velocities: <br />
						S Manual Slewing RA<br />
						s Manual Slewing DEC<br />
						M Move Speed RA<br />
						m Move Speed DEC<br />
						T GoTo Slewing RA<br />
						t GoTo Slewing DEC<br />
						A Slewing Acceleration RA<br />
						a Slewing Acceleration DEC<br />
						C Centering RA<br />
						c Centering DEC<br />
						G Guiding RA<br />
						g Guiding DEC<br />
						<br />
						'X' Servo motor curve parameters (Attention: Wrong 
						values could burn the motors!)<br />
						P Proportional value for the X axis (RA, AZ)<br />
						p Proportional value for the Y axis (DEC, EL)<br />
						D Differential value for the X axis (RA, AZ)<br />
						d Differential value for the Y axis (DEC, EL)<br />
						<br />
						'z' State (may be expanded later, please test single 
						bits)<br />
						0 currently waiting for startup mode selection<br />
						1 Gemini started up<br />
						<br />
						<br />
						2.3 Serial Port Emulator<br />
						<br />
						This emulator bridges the gap between the HTTP-based web 
						interface and the serial commands. Commands sent as 
						string value of the SE= parameter are executed by the 
						serial command interpreter. It is possible to send 
						several serial commands at once, but it must be assured 
						that the responses not exceed 64 bytes, the length of a 
						special output buffer used for the interpreter. This 
						output can be obtained with the cgi command line "c C S 
						%s".<br />
						<br />
						<br />
						<br />
						2.4 Forms input<br />
						2.4.1 POST parameter<br />
						<br />
						So far, the HTTP POST method is only used for file 
						uploading and SD card formating.<br />
						<br />
						2.4.2 GET parameter<br />
						<br />
						Syntax:<br />
						<br />
						Several command strings don't need any parameter values 
						given (nothing noted after the equal sign) or simply 
						ignore them, but most commands need them formed exactly 
						as described below in C-printf syntax:<br />
						<br />
						%d integer<br />
						%u unsigned integer<br />
						%f floating point number<br />
						%s string<br />
						<br />
						All other characters have to appear exactly as they are 
						shown.<br />
						<br />
						Parameter list:<br />
						<br />
						MR=e Move Eastward<br />
						MR=w Move Westward<br />
						MR=q Stop moving RA<br />
						MD=n Move Northward<br />
						MD=s Move Southward<br />
						MD=q Stop moving DEC<br />
						<br />
						PH= Park at Home Position<br />
						Ph= Set Home Position<br />
						PC= Park at CWD Position<br />
						PZ= Park at Zenith<br />
						PS= Sleep Telescope<br />
						PW= Wakeup Telescope<br />
						<br />
						hc=0..2 Set Hand Controler into Visual (0), Photo(1) or 
						All Speed Mode<br />
						hB=0..7 Hand Controler brightness<br />
						hC=0..2 Hand Controler color scheme (day, dawn, night)<br />
						ts=0..6 Set Tracking Mode (Sidereal, King, ...)<br />
						<br />
						du="%u.%u.%u" UTC Date<br />
						dc="%u.%u.%u" Civil Date <br />
						tu="%u:%u:%u" UTC Time<br />
						tc="%u:%u:%u" Civil Time<br />
						<br />
						tr="%u:%u:%u" Target Right Ascension<br />
						td="%d:%u:%u" Target Declination<br />
						tR="%u" Target Physical Right Ascension<br />
						tD="%u" Target Physical Declination<br />
						ta="%d:%u:%u" Target Azimuth<br />
						te="%u:%u:%u" Target Elevation<br />
						tn="%s" Target Name<br />
						<br />
						mn="%u" Current model number 0..1<br />
						sm="%u" Store current model under number 0..1<br />
						cm="%u" clear model number #<br />
						aa= Additional Alignment<br />
						Sm= Synchronize<br />
						ia= Initial Alignment<br />
						<br />
						ML=%s Load model under the given name from the Models 
						subdirectory<br />
						MS=%s Store model with the given name in the Models 
						subdirectory<br />
						<br />
						mD="%u" mount design<br />
						mt="%u" mount type<br />
						wr="%d" Worm ratio in right ascension<br />
						wd="%d" Worm ratio in declination<br />
						sr="%u" Spur ratio in right ascension<br />
						sd="%u" Spur ratio in declination<br />
						mr="%u" Motor encoder resolution in right ascension<br />
						md="%u" Motor encoder resolution in declination<br />
						dt="%u" DEC TVC step count<br />
						<br />
						SP="%u" Proportional parameter for X servo (RA/AZ) for 
						High Speed<br />
						Sp="%u" Proportional parameter for X servo (RA/AZ) for 
						Low Speed<br />
						SQ="%u" Proportional parameter for Y servo (DEC/EL) for 
						High Speed<br />
						Sq="%u" Proportional parameter for Y servo (DEC/EL) for 
						Low Speed<br />
						SD="%u" Differential parameter for X servo (RA/AZ) for 
						High Speed<br />
						Sd="%u" Differential parameter for X servo (RA/AZ) for 
						Low Speed<br />
						SF="%u" Differential parameter for Y servo (DEC/EL) for 
						High Speed<br />
						Sf="%u" Differential parameter for Y servo (DEC/EL) for 
						Low Speed<br />
						ST="%u" warning treshold for offset in RA/Az while 
						holding position/guiding/tracking<br />
						St="%u" warning treshold for offset in DEC/El while 
						holding position/guiding/tracking<br />
						SH="%u" warning treshold for heavy load (high PWM duty 
						cycle) in RA/Az while holding position/guiding/tracking<br />
						Sh="%u" warning treshold for heavy load (high PWM duty 
						cycle) in DEC/El while holding position/guiding/tracking<br />
						SS="%u" warning treshold for heavy load (high PWM duty 
						cycle) in RA/Az while slewing<br />
						Ss="%u" warning treshold for heavy load (high PWM duty 
						cycle) in DEC/El while slewing<br />
						<br />
						R1="%c" Move Speed: G=Guide, C=Center, M=Move, S=Slew<br />
						<br />
						VM="%d" Manual Slewing Speed RA<br />
						Vm="%d" Manual Slewing Speed DEC<br />
						VT="%d" GoTo Slewing Speed RA<br />
						Vt="%d" GoTo Slewing Speed DEC<br />
						VV="%d" Move Speed RA<br />
						Vv="%d" Move Speed DEC<br />
						Vi="%d" Increment Move Speeds by the given value. If 
						omitted, default is 50.<br />
						Vd="%d" Decrement Move Speeds by the given value. If 
						omitted, default is 50.<br />
						<br />
						VA="%f" RA Slewing Acceleration<br />
						Va="%f" DEC Slewing Acceleration<br />
						VC="%u" RA Centering Speed<br />
						Vc="%u" DEC Centering Speed<br />
						<br />
						VG="%u.%u" RA Guiding Speed<br />
						Vg="%u.%u" DEC Guiding Speed<br />
						<br />
						Sr="%u°%u" Right Safety Limit<br />
						Sl="%u°%u" Left Safety Limit<br />
						Sg="%u°%u" Western GoTo Limit<br />
						<br />
						ER="%d" Axis Encoder RA resolution<br />
						ED="%d" Axis Encoder DEC resolution<br />
						ep="%u" encoder port usage, 0..15<br />
						<br />
						si="%u" select location<br />
						sn="%s" site name<br />
						st="%d:%u:%u" Timezone (minutes and seconds can be 
						omitted)<br />
						so="%d°%u'%u" Longitude<br />
						sa="%d°%u'%u" Latitude<br />
						se="%d" Elevation<br />
						s#="%u" site number<br />
						gp="%u" Query GPS receiver at serial ports 0..3<br />
						<br />
						bm="%u" default boot mode, 0..3 for Cold Start, Warm 
						Start, Warm Restart, Ask, if possible<br />
						bo="%u" select boot mode, 0..2 for Cold Start, Warm 
						Start, Warm Restart<br />
						<br />
						bO= Reboot (if possible, ask for startup mode)<br />
						bC= Reboot, enforcing a Cold Start<br />
						<br />
						s0="%u" Baud rate selection, serial port 0<br />
						s1="%u" Baud rate selection, serial port 1<br />
						s2="%u" Baud rate selection, serial port 2<br />
						s3="%u" Baud rate selection, serial port 3<br />
						sg="%u" Baud rate selection for GPS receiver<br />
						<br />
						ct="%u" Catalog selection (active catalog file id)<br />
						ff="%u" Firmware flashing (selected firmware file id)<br />
						CN="%s" Catalog Name selection<br />
						DN="%s" Directory to change to<br />
						Df="%s" Delete File in current path<br />
						DF="%s" Delete File with absolute path given<br />
						DM= Delete modeling log file /LOGS/POINTING.DAT<br />
						<br />
						co="%s" Catalog object string<br />
						SO="%u" Solar System object number (Sun=0, ...)<br />
						gtf= enforce meridian flip<br />
						pac= reset MA and ME for Polar Axis Correction<br />
						GT= start GoTo<br />
						GP= start Physical GoTo<br />
						GA= start Alt/Az GoTo<br />
						<br />
						AbH="%c" '1': List only catalog object currently above 
						horizon, '0': list all objects<br />
						prec="%u" always precess ('1') given coordinates or not 
						('0')<br />
						swCM="%u" swap serial commands :CM# and :Cm# 
						functionality: Synchronize&lt;-&gt;Additional Align <br />
						sdo= precess given object coordinates<br />
						<br />
						ip="%u.%u.%u.%u" current IP Address<br />
						msk="%u.%u.%u.%u" current IP Netmask<br />
						gw="%u.%u.%u.%u" current IP default gateway<br />
						pdns"%u.%u.%u.%u" current Primary DNS server<br />
						sdns"%u.%u.%u.%u" current Secondary DNS server<br />
						Ip="%u.%u.%u.%u" static IP Address<br />
						Msk="%u.%u.%u.%u" static IP Netmask<br />
						Gw="%u.%u.%u.%u" static IP default gateway<br />
						Pdns"%u.%u.%u.%u" static Primary DNS server<br />
						Sdns"%u.%u.%u.%u" static Secondary DNS server<br />
						mac="%x:%x:%x:%x:%x:%x" MAC address<br />
						UP="%u" UDP socket port number<br />
						TP="%u" TCP socket port number<br />
						Tp="%u.%u.%u.%u" Accepted TCP Peer for transparent TCP 
						sockets<br />
						Up="%u.%u.%u.%u" Accepted UDP Peer for UDP socket 
						communication<br />
						<br />
						CL= SRAM reset to default Losmandy HGM settings<br />
						CM= SRAM reset to default MI-250 settings<br />
						CS= Store SRAM configuration parameters to \config\Gemini.cfg<br />
						CR= Load SRAM configuration parameters from \config\Gemini.cfg<br />
						<br />
						PM="%u" Parking Mode preseclection (0..2)<br />
						<br />
						pt= Start PEC training<br />
						pa= Abort PEC training<br />
						ps= Start PEC replay<br />
						pe= Stop PEC replay<br />
						pb="%u" Activate PEC playback at boot time, if PEC data 
						are available.<br />
						<br />
						<br />
						3. Character encoding<br />
						<br />
						Gemini-II supports internationalized messages. Special 
						characters have to be displayed by the HC, browsers as 
						well as they have to be exchanged between browser. <br />
						<br />
						XML-like character encoding is the only form of encoding 
						that is fully supported by most browsers not only for 
						displaying HTML pages, but also for Ajax technologies, 
						which requires valid XML. For this reason, special 
						characters should be coded in UCS Universal Character 
						Set as defined by ISO/IEC 10646. Characters are encoded 
						as numeric entities using the format <br />
						&amp;#nnnn;<br />
						where nnnn is the numeric representation of the 
						character (leading zeros my be omitted).<br />
						<br />
						The graphical HC supports XML encoded Greek lowercase 
						characters with nnnn reaching from 945 to 969:<br />
						<br />
						945: alpha (coded: &amp;#945;)<br />
						946: beta &amp;#946;<br />
						947: gamma &amp;#947;<br />
						948: delta &amp;#948;<br />
						949: epsilon &amp;#949;<br />
						... until ...<br />
						969: omega &amp;#969;<br />
						<br />
						The HC also supports the most common German, French and 
						Spanish special characters. So far that are:<br />
						<br />
						196: Ä<br />
						205: Í<br />
						214: Ö<br />
						218: Ú<br />
						220: Ü<br />
						224: à<br />
						225: á<br />
						228: ä<br />
						231: c cedilla<br />
						232: è<br />
						233: é<br />
						234: ê<br />
						237: í<br />
						241: ~n (n with tilde above)<br />
						243: ó<br />
						246: ö<br />
						250: ú<br />
						252: ü<br />
						<br />
						Other characters used may show up correctly in browsers 
						but the HC will display a question mark '?'at its place.<br />
			<br /><br />

			</td>
	</tr>
	<tr>
		<td class="style6">
						&emsp;</td>
	</tr>
</table>

</html>


<?php include("bottom.php"); ?>



