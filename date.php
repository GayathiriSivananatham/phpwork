<html>
<script>
    function date()
    {
    var d=parseInt(document.f1.dd.value);
    var m=parseInt(document.f1.mm.value);
    var y=parseInt(document.f1.yy.value);
    var ch=parseInt(document.f1.ch.value);
    var a=['31','28','31','30','31','30','31','31','30','31','30','31'];
    switch(ch)
    {
        case 1:if(d==1){

                if(m==1||m==3||m==5||m==7||m==8||m==10||m==12)
                {
                    d=31;
                }
                else if (m==4||m==6||m==9||m==11) 
                {
                    d=30;
                }
                else
                {
                    if(y%4==0&&m==2)
                    {
                        d=29;
                    }
                    else
                    {
                        d=28;
                    }
                }
                            }
            else
            {
                m=m+1;
            }
            document.write(d+":"+m+":"+y);
                break;
        case 2:
                if(d==1)
                {
                    m=m+1
                }
                else
                {
                    d=a[m-1]-d;
                }
                if(m>12)
                {
                    m=1;
                    y++;
                }
               document.write(d+":"+m+":"+y);
               break; 
    }
}
</script>

<body>
    <form name="f1" action="date1.php" method="post">
        DD<input type="text" name="dd"><br><br>
        MM<input type="text" name="mm"><br><br>
        YY<input type="text" name="yy"><br><br>
        Postpaid-1 prepaid-2<input type="text" name="ch">
        <input type="button" value="Submit" onclick="date()">
    </form>
</body>

</html>