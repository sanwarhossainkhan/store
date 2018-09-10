function SM_IMPORT(action,feedback) {    

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(feedback).innerHTML = xmlhttp.responseText;
        }
    };
    if(action == "registration")        
    {
        //==== Registration field Variables =====
        var m_name = document.getElementById('fullname').value;
        var m_cus_type = document.getElementById('m_customers').value;
        var m_male = document.getElementById('male').checked;
        var m_female = document.getElementById('female').checked;
        var m_contact = document.getElementById('contact').value;
        var m_email = document.getElementById('email').value;
        var m_address = document.getElementById('address').value;
        var m_password = document.getElementById('password').value;

        xmlhttp.open("GET", "../system/accessback.php?"+ action +"=" + m_name + "&customers=" + m_cus_type + "&sex1="+ m_male + "&sex2=" + m_female + "&contact=" + m_contact + "&email=" + m_email + "&address=" + m_address + "&password="+ m_password, true);
    }
    else if(action == "Qproduct")
    {
        //==== Product field Variables =====
        var pro_id = document.getElementById('pro_id').value;
        var name = document.getElementById('name').value;
        var price = document.getElementById('price').value;
        var quantity = document.getElementById('quantity').value;
        var discount = document.getElementById('discount').value;
        var vat = document.getElementById('vat').value;

        xmlhttp.open("GET", "../system/accessback.php?"+ action +"=" + pro_id + "&name="+ name + "&price=" + price + "&quantity=" + quantity + "&discount=" + discount + "&vat=" + vat, true);
    }
    else if(action == "Reload")
    {
        var q_value = 1;
        xmlhttp.open("GET", "../system/accessback.php?"+ action +"=" + q_value, true);
    }
    else if(action == "Discount")
    {
        var d_name = document.getElementById('d_name').value;
        var d_code = document.getElementById('d_code').value;
        var customer = document.getElementById('customer').value;
        var d_discount = document.getElementById('d_discount').value;

        xmlhttp.open("GET", "../system/accessback.php?"+ action +"=" + d_name + "&d_code="+ d_code + "&customer_type=" + customer + "&discount=" + d_discount, true);
    }
    else if(action == "add_customer")
    {
        xmlhttp.open("GET", "../system/accessback.php?"+ action +"=" + d_name + "&d_code="+ d_code, true);
    }
    else if(action == "Vatsetting")
    {
        var vatsetting = document.getElementById('vatsetting').checked;
        xmlhttp.open("GET", "../system/accessback.php?"+ action +"=" + vatsetting, true);
    }
    
    xmlhttp.send();

    // feedback = feedbackStatus
}


// function  OverallDiscount(DisValue)
// {  
//   var xhttp;
//   xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (xhttp.readyState == 4 && xhttp.status == 200) {
//       document.getElementById("ov_value").innerHTML = xhttp.responseText;
//     }
//   };
//   xhttp.open("GET", "../system/accessback.php?setOverDiscount="+DisValue, true);
//   xhttp.send();
// }


