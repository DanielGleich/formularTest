function checkForm()
{
  if (document.forms[0].elements[0].value== "")
  {
    window.alert("Geben Sie Ihren Vornamen ein!");
    return false;
  }
  
  if (document.forms[0].elements[1].value == "")
  {
    window.alert("Geben Sie einen Nachnamen ein!");
    return false;
  }
  
  if (!document.forms[0].elements[2].checked && !document.forms[0].elements[3].checked)
  {
    window.alert("Geben Sie ihre Anrede ein!");
    return false;
  }
  return window.confirm("Sind Sie sicher, dass sie die Daten versenden wollen?");
}
