$(document).ready(function(){
    $.ajax({
        url: 'ajaxfile.php',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            for(var i=0; i<len; i++){
                var schoolCode = response[i].school_code;
                var schoolSubject = response[i].school_subject;
                var firstGrade = response[i].first_grade;
                var secondGrade = response[i].second_grade;
                var thirdGrade = response[i].third_grade;
                var fourthGrade = response[i].fourth_grade;

                if(firstGrade === null){
                    firstGrade = 0;
                } else if (secondGrade === null){
                    secondGrade = 0;
                } else if (thirdGrade === null){
                    thirdGrade = 0;
                } else if (fourthGrade === null){
                    fourthGrade = 0;
                }

                var tr_str = "<tr>" +
                    "<td align='center'>" + schoolCode + "</td>" +
                    "<td align='center'>" + schoolSubject + "</td>" +
                    "<td align='center'>" + firstGrade + "</td>" +
                    "<td align='center'>" + secondGrade + "</td>" +
                    "<td align='center'>" + thirdGrade + "</td>" +
                    "<td align='center'>" + fourthGrade + "</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);
            }

        }
    });
});