var data;
function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    //rawFile = "data:text/csv;charset=utf-8,%EF%BB%BF";
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                
                data = $.csv.toArrays(allText);
                var html;
                for(i=1;i<data.length;i++){
                    html+="<option data-tokens='" +data[i][1]+ "' >"+data[i][1]+"</option>";
                }
                document.getElementById("from").innerHTML= html;
                document.getElementById("to").innerHTML= html;
                $('#from').selectpicker('refresh');
                $('#to').selectpicker('refresh');
                $('#from').selectpicker('val', 'Brussel-Zuid/Bruxelles-Midi');
                $('#to').selectpicker('val', 'Antwerpen-Centraal');       
                }
            } 
        }
        rawFile.send(null);
    }
  
readTextFile("https://raw.githubusercontent.com/iRail/stations/master/stations.csv");

    



