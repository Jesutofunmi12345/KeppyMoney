 <div id="greeting" class="nextTime"></div>


<style type="text/css">

	.greeting{
            font-family: cursive;
            font-size:  200px;
            font-weight: bold;
            text-align:center;
            color: gray;
            margin-left: 10px;
         }
</style>
        

        <script type="text/javascript">
document.getElementById('greeting');
var day = new Date();
var hr = day.getHours();
if (hr == 1) {
 document.write("Good morning! 1AM and still your going! ");
}
if (hr == 2) {
 document.write("Hello, it is past 2AM! Studying in the Library makes you a scholar!");
}
if (hr == 3) {
 document.write("Hey, it is after 3AM! The Library is always open....Explore!");
}
if (hr == 4) {
 document.write("4AM? Our Library is still up and running!");
}
if (hr == 5) {
 document.write("Whoa! It's almost daylight and your still going!");
}
if (hr == 6) {
 document.write("Hey, isn't it too early to be using your computer");
}
if ((hr == 6) || (hr == 7) || (hr == 8) || (hr == 9) || (hr == 10)) {
 document.write("Good Morning!");
}
if (hr == 11) {
 document.write("11AM... Is it time for lunch yet?");
}
if (hr == 12) {
 document.write("NOON! Great, it must be time for lunch!");
}
if (hr == 14) {
 document.write("It's 2PM. Have you eaten lunch yet?");
}
if ((hr == 15) || (hr == 16) || (hr == 13)) {
 document.write("Good Afternoon!");
}
if ((hr == 17) || (hr == 18) || (hr == 19) || (hr == 20) || (hr == 21) || (hr == 22)) {
 document.write("Good Evening! Welcome to prime time on the web!");
}
if (hr == 23) {
 document.write("It's almost midnight...Aren't you sleepy yet?");
}
if (hr==0) {
 document.write("It's midnight... do you ever sleep?");
}
</script>