<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Polytechnic University of the Philippines &mdash; Programming Guild</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.png" />
</head>
<body>
    <div id="body_main" class="body">
        <p class="catchphrase"><em class="strong">Bored?</em></p>
        <p>Wanna do something <em class="stronger">great?</em></p>
        <p class="smile">:D</p>
        <p>
            <script type="text/javascript">
				dateFuture1 = new Date(2013,5,15,0,0,0);

				function GetCount(ddate,iid){

				dateNow = new Date();	//grab current date
				amount = ddate.getTime() - dateNow.getTime();	//calc milliseconds between dates
				delete dateNow;

				// if time is already past
				if(amount < 0){
					document.getElementById(iid).innerHTML="Now!";
				}
				// else date is still good
				else{
					days=0;hours=0;mins=0;secs=0;out="";

					ms = (""+((amount%1000)+1000)).substr(1,3);		amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs

					days=Math.floor(amount/86400);//days
					amount=amount%86400;

					hours=Math.floor(amount/3600);//hours
					amount=amount%3600;

					mins=Math.floor(amount/60);//minutes
					amount=amount%60;

					secs=Math.floor(amount);//seconds

					if(days != 0){out += days +" : ";}
					if(hours != 0){out += hours +" : ";}
					out += mins +" : ";
					out += secs +("."+ms)+" : ";
					out = out.substr(0,out.length-2);
					document.getElementById(iid).innerHTML=out;

					setTimeout(function(){GetCount(ddate,iid)}, 25);
				}
			}

			window.onload=function(){
				GetCount(dateFuture1, 'timer');
			};
			</script>
			<div id="timer"></div>
        </p>
    </div>
    <div id="footer_main" class="footer">
        <ul class="networks">
            <li><a href="http://www.facebook.com/PUPProgrammingGuild" target="_blank"><img src="img/icon-facebook.svg" alt="Website"> PUPProgrammingGuild</a></li>
            <li><a href="http://twitter.com/pup_progguild" target="_blank"><img src="img/icon-twitter.svg" alt="Website"> @pup_progguild</a></li>
        </ul>
    </div>
</body>
</html>