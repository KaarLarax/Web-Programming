function dayOfWeek() {
    var result;
    var gender = document.getElementById("gender-select").value;
    var day = document.getElementById("day-select").value;
    if (gender == "Male") {
        switch (day) {
            case "Monday":
                result = "Montag";
                break;
            case "Tuesday":
                result = "Dienstag";
                break;
            case "Wednesday":
                result = "Mittwoch";
                break;
            case "Thursday":
                result = "Donnerstag";
                break;
            case "Friday":
                result = "Freitag";
                break;
            case "Saturday":
                result = "Samstag";
                break;
            case "Sunday":
                result = "Sonntag";
                break;
            default:
                result = "Invalid day";
        }
    } else {
        switch (day) {
            case "Monday":
                result = "Lundi";
                break;
            case "Tuesday":
                result = "Mardi";
                break;
            case "Wednesday":
                result = "Mercredi";
                break;
            case "Thursday":
                result = "Jeudi";
                break;
            case "Friday":
                result = "Vendredi";
                break;
            case "Saturday":
                result = "Samedi";
                break;
            case "Sunday":
                result = "Dimanche";
                break;
            default:
                result = "Invalid day";
        }
    }
    document.getElementById("result").innerHTML = "The day is: " + result;
    return;
}