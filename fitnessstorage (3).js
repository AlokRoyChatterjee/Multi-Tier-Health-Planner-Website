function showAll(){

var key = "";
        var list = "<tr><th>Exercise ---</th><th>--- Resources for Exercise</th></tr>\n";
        var i = 0;
        //For a more advanced feature, you can set a cap on max items in the cart.
        for (i = 0; i <= sessionStorage.length-1; i++) {
            key = sessionStorage.key(i);
            list += "<tr><td>" + key + "</td>\n<td>"
                    + sessionStorage.getItem(key) + "</td></tr>\n";
        }
        //If no item exists in the cart.
        if (list == "<tr><th>Item</th><th>Value</th></tr>\n") {
            list += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
        }
        //Bind the data to HTML table.
        //You can use jQuery, too.
        document.getElementById('list').innerHTML = list;

    }
        function Save() {

            var name = document.forms.exerciselist.name.value;
            var data = document.forms.exerciselist.data.value;
            sessionStorage.setItem(name, data);
            showAll();
        
        }

        function Modify() {
            var name1 = document.forms.exerciselist.name.value;
            var data1 = document.forms.exerciselist.data.value;
            //check if name1 is already exists
        
        //Check if key exists.
                    if (sessionStorage.getItem(name1) !=null)
                    {
                      //update
                      sessionStorage.setItem(name1,data1);
                      document.forms.exerciselist.data.value = sessionStorage.getItem(name1);
                    }
        
            showAll();
        }

        function Remove(){
            var name=document.forms.exerciselist.name.value;
            document.forms.exerciselist.data.value=sessionStorage.removeItem(name);
            showAll();
        }

        function Clear() {
            sessionStorage.clear();
            showAll();
        }