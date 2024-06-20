const second = 1000,
	minute = second * 60,
	hour = minute * 60,
	day = hour * 24;

// I'm adding this section so I don't have to keep updating this pen every year :-)
// remove this if you don't need it
let today = new Date(),
	dd = today.getDate().toString().padStart(2, "0"),
	mm = (today.getMonth() + 1).toString().padStart(2, "0"),
	yyyy = today.getFullYear(),
	birthday = "06/27/2024";

today = mm + "/" + dd + "/" + yyyy;
if (today > birthday) {
	birthday = "00/00/0000";
}
// end

const countDown = new Date(birthday).getTime();
x = setInterval(function () {
	const now = new Date().getTime();
	distance = countDown - now;
	$(".countdown .days").text(Math.floor(distance / day));
	$(".countdown .hours").text(Math.floor((distance % day) / hour));
	$(".countdown .minutes").text(Math.floor((distance % hour) / minute));
	$(".countdown .seconds").text(Math.floor((distance % minute) / second));
}, 0);
