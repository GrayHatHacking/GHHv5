<?php 
$nameerror = $addresserror = 0;
$name = "Full Name";
$address = "Street Address";
$country = "United States of America";
if(count($_REQUEST) > 0) {
        $name = $_REQUEST['name'];
        $address = $_REQUEST['address'];
        $country = $_REQUEST['country'];
        if ($name != htmlspecialchars($name))
        {
                $nameerror = 1;
                $name = htmlspecialchars($name);
        }
        if ($address != htmlspecialchars($address))
        {
                $addresserror = 1;
                $address = htmlspecialchars($address);
        }
        if($nameerror == 0 & $addresserror == 0)
        {
                print "You entered<BR>$name<BR>$address<BR>$country<BR>\n";
                exit;
        }
}

?>
<!DOCTYPE html>
<HTML>
<HEAD>
  <META name="generator" content=
  "HTML Tidy for HTML5 for Linux version 5.2.0">
  <TITLE>Example 2</TITLE>
  <LINK rel="stylesheet" href="css/bootstrap.min.css">
  <SCRIPT src="js/jquery.min.js">
  <SCRIPT src="js/bootstrap.min.js">
  </SCRIPT>
</HEAD>
<BODY>
  <SCRIPT type="text/javascript">
    $(document).ready(function() {
            $('#country').val("<?php echo $country?>");
                });
  </SCRIPT>
  <DIV class="container">
    <FORM class="form-horizontal" role="form" method="post" action=
    "example2.php">
      <H2>Registration Form</H2>
      <DIV class="form-group">
        <LABEL for="name" class="col-sm-3 control-label">Full
        Name</LABEL>
        <DIV class="col-sm-9">
          <INPUT type="text" id="name" name="name" placeholder=
          '<?php echo $name ?>' class="form-control" autofocus="">
          <SPAN class=
          "help-block"><?php if ($nameerror){print "<B>";}?>Last
          Name, First Name, eg.: Smith, John</SPAN>
        </DIV>
      </DIV>
      <DIV class="form-group">
        <LABEL for="address" class=
        "col-sm-3 control-label">Address</LABEL>
        <DIV class="col-sm-9">
          <INPUT type="text" name="address" id="address"
          placeholder='<?php echo $address ?>' class="form-control"
          autofocus=""> <SPAN class=
          "help-block"><?php if($addresserror){print "<B>";}?>eg:
          123 Valentine Ct.</SPAN>
        </DIV>
      </DIV>
      <DIV class="form-group">
        <LABEL for="country" class=
        "col-sm-3 control-label">Country</LABEL>
        <DIV class="col-sm-9">
          <SELECT name="country" id="country" class="form-control">
            <OPTION value="Afghanistan">
              Afghanistan
            </OPTION>
            <OPTION value="Albania">
              Albania
            </OPTION>
            <OPTION value="Algeria">
              Algeria
            </OPTION>
            <OPTION value="Andorra">
              Andorra
            </OPTION>
            <OPTION value="Angola">
              Angola
            </OPTION>
            <OPTION value="Anguilla">
              Anguilla
            </OPTION>
            <OPTION value="Antigua">
              Antigua
            </OPTION>
            <OPTION value="Argentina">
              Argentina
            </OPTION>
            <OPTION value="Armenia">
              Armenia
            </OPTION>
            <OPTION value="Australia">
              Australia
            </OPTION>
            <OPTION value="Austria">
              Austria
            </OPTION>
            <OPTION value="Azerbaijan">
              Azerbaijan
            </OPTION>
            <OPTION value="Bahamas">
              Bahamas
            </OPTION>
            <OPTION value="Bahrain">
              Bahrain
            </OPTION>
            <OPTION value="Bangladesh">
              Bangladesh
            </OPTION>
            <OPTION value="Barbados">
              Barbados
            </OPTION>
            <OPTION value="Belarus">
              Belarus
            </OPTION>
            <OPTION value="Belgium">
              Belgium
            </OPTION>
            <OPTION value="Belize">
              Belize
            </OPTION>
            <OPTION value="Benin">
              Benin
            </OPTION>
            <OPTION value="Bermuda">
              Bermuda
            </OPTION>
            <OPTION value="Bhutan">
              Bhutan
            </OPTION>
            <OPTION value="Bolivia">
              Bolivia
            </OPTION>
            <OPTION value="Bosnia">
              Bosnia
            </OPTION>
            <OPTION value="Botswana">
              Botswana
            </OPTION>
            <OPTION value="Brazil">
              Brazil
            </OPTION>
            <OPTION value="Brunei">
              Brunei
            </OPTION>
            <OPTION value="Bulgaria">
              Bulgaria
            </OPTION>
            <OPTION value="Burkina">
              Burkina
            </OPTION>
            <OPTION value="Myanmar/Burma">
              Myanmar/Burma
            </OPTION>
            <OPTION value="Burundi">
              Burundi
            </OPTION>
            <OPTION value="Cambodia">
              Cambodia
            </OPTION>
            <OPTION value="Cameroon">
              Cameroon
            </OPTION>
            <OPTION value="Canada">
              Canada
            </OPTION>
            <OPTION value="Cape">
              Cape
            </OPTION>
            <OPTION value="Cayman">
              Cayman
            </OPTION>
            <OPTION value="Central">
              Central
            </OPTION>
            <OPTION value="Chad">
              Chad
            </OPTION>
            <OPTION value="Chile">
              Chile
            </OPTION>
            <OPTION value="China">
              China
            </OPTION>
            <OPTION value="Colombia">
              Colombia
            </OPTION>
            <OPTION value="Comoros">
              Comoros
            </OPTION>
            <OPTION value="Congo">
              Congo
            </OPTION>
            <OPTION value="Costa">
              Costa
            </OPTION>
            <OPTION value="Croatia">
              Croatia
            </OPTION>
            <OPTION value="Cuba">
              Cuba
            </OPTION>
            <OPTION value="Cyprus">
              Cyprus
            </OPTION>
            <OPTION value="Czech">
              Czech
            </OPTION>
            <OPTION value="Democratic">
              Democratic
            </OPTION>
            <OPTION value="Denmark">
              Denmark
            </OPTION>
            <OPTION value="Djibouti">
              Djibouti
            </OPTION>
            <OPTION value="Dominican">
              Dominican
            </OPTION>
            <OPTION value="Dominica">
              Dominica
            </OPTION>
            <OPTION value="Ecuador">
              Ecuador
            </OPTION>
            <OPTION value="Egypt">
              Egypt
            </OPTION>
            <OPTION value="El">
              El
            </OPTION>
            <OPTION value="Equatorial">
              Equatorial
            </OPTION>
            <OPTION value="Eritrea">
              Eritrea
            </OPTION>
            <OPTION value="Estonia">
              Estonia
            </OPTION>
            <OPTION value="Ethiopia">
              Ethiopia
            </OPTION>
            <OPTION value="Fiji">
              Fiji
            </OPTION>
            <OPTION value="Finland">
              Finland
            </OPTION>
            <OPTION value="France">
              France
            </OPTION>
            <OPTION value="French">
              French
            </OPTION>
            <OPTION value="Gabon">
              Gabon
            </OPTION>
            <OPTION value="Gambia">
              Gambia
            </OPTION>
            <OPTION value="Georgia">
              Georgia
            </OPTION>
            <OPTION value="Germany">
              Germany
            </OPTION>
            <OPTION value="Ghana">
              Ghana
            </OPTION>
            <OPTION value="Great">
              Great
            </OPTION>
            <OPTION value="Greece">
              Greece
            </OPTION>
            <OPTION value="Grenada">
              Grenada
            </OPTION>
            <OPTION value="Guadeloupe">
              Guadeloupe
            </OPTION>
            <OPTION value="Guatemala">
              Guatemala
            </OPTION>
            <OPTION value="Guinea">
              Guinea
            </OPTION>
            <OPTION value="Guinea-Bissau">
              Guinea-Bissau
            </OPTION>
            <OPTION value="Guyana">
              Guyana
            </OPTION>
            <OPTION value="Haiti">
              Haiti
            </OPTION>
            <OPTION value="Honduras">
              Honduras
            </OPTION>
            <OPTION value="Hungary">
              Hungary
            </OPTION>
            <OPTION value="Iceland">
              Iceland
            </OPTION>
            <OPTION value="India">
              India
            </OPTION>
            <OPTION value="Indonesia">
              Indonesia
            </OPTION>
            <OPTION value="Iran">
              Iran
            </OPTION>
            <OPTION value="Iraq">
              Iraq
            </OPTION>
            <OPTION value="Israel">
              Israel
            </OPTION>
            <OPTION value="Italy">
              Italy
            </OPTION>
            <OPTION value="Ivory">
              Ivory
            </OPTION>
            <OPTION value="Jamaica">
              Jamaica
            </OPTION>
            <OPTION value="Japan">
              Japan
            </OPTION>
            <OPTION value="Jordan">
              Jordan
            </OPTION>
            <OPTION value="Kazakhstan">
              Kazakhstan
            </OPTION>
            <OPTION value="Kenya">
              Kenya
            </OPTION>
            <OPTION value="Kosovo">
              Kosovo
            </OPTION>
            <OPTION value="Kuwait">
              Kuwait
            </OPTION>
            <OPTION value="Kyrgyz">
              Kyrgyz
            </OPTION>
            <OPTION value="Laos">
              Laos
            </OPTION>
            <OPTION value="Latvia">
              Latvia
            </OPTION>
            <OPTION value="Lebanon">
              Lebanon
            </OPTION>
            <OPTION value="Lesotho">
              Lesotho
            </OPTION>
            <OPTION value="Liberia">
              Liberia
            </OPTION>
            <OPTION value="Libya">
              Libya
            </OPTION>
            <OPTION value="Liechtenstein">
              Liechtenstein
            </OPTION>
            <OPTION value="Lithuania">
              Lithuania
            </OPTION>
            <OPTION value="Luxembourg">
              Luxembourg
            </OPTION>
            <OPTION value="Republic">
              Republic
            </OPTION>
            <OPTION value="Madagascar">
              Madagascar
            </OPTION>
            <OPTION value="Malawi">
              Malawi
            </OPTION>
            <OPTION value="Malaysia">
              Malaysia
            </OPTION>
            <OPTION value="Maldives">
              Maldives
            </OPTION>
            <OPTION value="Mali">
              Mali
            </OPTION>
            <OPTION value="Malta">
              Malta
            </OPTION>
            <OPTION value="Martinique">
              Martinique
            </OPTION>
            <OPTION value="Mauritania">
              Mauritania
            </OPTION>
            <OPTION value="Mauritius">
              Mauritius
            </OPTION>
            <OPTION value="Mayotte">
              Mayotte
            </OPTION>
            <OPTION value="Mexico">
              Mexico
            </OPTION>
            <OPTION value="Moldova,">
              Moldova,
            </OPTION>
            <OPTION value="Monaco">
              Monaco
            </OPTION>
            <OPTION value="Mongolia">
              Mongolia
            </OPTION>
            <OPTION value="Montenegro">
              Montenegro
            </OPTION>
            <OPTION value="Montserrat">
              Montserrat
            </OPTION>
            <OPTION value="Morocco">
              Morocco
            </OPTION>
            <OPTION value="Mozambique">
              Mozambique
            </OPTION>
            <OPTION value="Namibia">
              Namibia
            </OPTION>
            <OPTION value="Nepal">
              Nepal
            </OPTION>
            <OPTION value="Netherlands">
              Netherlands
            </OPTION>
            <OPTION value="New">
              New
            </OPTION>
            <OPTION value="Nicaragua">
              Nicaragua
            </OPTION>
            <OPTION value="Niger">
              Niger
            </OPTION>
            <OPTION value="Nigeria">
              Nigeria
            </OPTION>
            <OPTION value="Korea,">
              Korea,
            </OPTION>
            <OPTION value="Norway">
              Norway
            </OPTION>
            <OPTION value="Oman">
              Oman
            </OPTION>
            <OPTION value="Pacific">
              Pacific
            </OPTION>
            <OPTION value="Pakistan">
              Pakistan
            </OPTION>
            <OPTION value="Panama">
              Panama
            </OPTION>
            <OPTION value="Papua">
              Papua
            </OPTION>
            <OPTION value="Paraguay">
              Paraguay
            </OPTION>
            <OPTION value="Peru">
              Peru
            </OPTION>
            <OPTION value="Philippines">
              Philippines
            </OPTION>
            <OPTION value="Poland">
              Poland
            </OPTION>
            <OPTION value="Portugal">
              Portugal
            </OPTION>
            <OPTION value="Puerto">
              Puerto
            </OPTION>
            <OPTION value="Qatar">
              Qatar
            </OPTION>
            <OPTION value="Reunion">
              Reunion
            </OPTION>
            <OPTION value="Romania">
              Romania
            </OPTION>
            <OPTION value="Russian">
              Russian
            </OPTION>
            <OPTION value="Rwanda">
              Rwanda
            </OPTION>
            <OPTION value="Saint">
              Saint
            </OPTION>
            <OPTION value="Saint">
              Saint
            </OPTION>
            <OPTION value="Saint">
              Saint
            </OPTION>
            <OPTION value="Samoa">
              Samoa
            </OPTION>
            <OPTION value="Sao">
              Sao
            </OPTION>
            <OPTION value="Saudi">
              Saudi
            </OPTION>
            <OPTION value="Senegal">
              Senegal
            </OPTION>
            <OPTION value="Serbia">
              Serbia
            </OPTION>
            <OPTION value="Seychelles">
              Seychelles
            </OPTION>
            <OPTION value="Sierra">
              Sierra
            </OPTION>
            <OPTION value="Singapore">
              Singapore
            </OPTION>
            <OPTION value="Slovak">
              Slovak
            </OPTION>
            <OPTION value="Slovenia">
              Slovenia
            </OPTION>
            <OPTION value="Solomon">
              Solomon
            </OPTION>
            <OPTION value="Somalia">
              Somalia
            </OPTION>
            <OPTION value="South">
              South
            </OPTION>
            <OPTION value="Korea,">
              Korea,
            </OPTION>
            <OPTION value="South">
              South
            </OPTION>
            <OPTION value="Spain">
              Spain
            </OPTION>
            <OPTION value="Sri">
              Sri
            </OPTION>
            <OPTION value="Sudan">
              Sudan
            </OPTION>
            <OPTION value="Suriname">
              Suriname
            </OPTION>
            <OPTION value="Swaziland">
              Swaziland
            </OPTION>
            <OPTION value="Sweden">
              Sweden
            </OPTION>
            <OPTION value="Switzerland">
              Switzerland
            </OPTION>
            <OPTION value="Syria">
              Syria
            </OPTION>
            <OPTION value="Tajikistan">
              Tajikistan
            </OPTION>
            <OPTION value="Tanzania">
              Tanzania
            </OPTION>
            <OPTION value="Thailand">
              Thailand
            </OPTION>
            <OPTION value="Timor">
              Timor
            </OPTION>
            <OPTION value="Togo">
              Togo
            </OPTION>
            <OPTION value="Trinidad">
              Trinidad
            </OPTION>
            <OPTION value="Tunisia">
              Tunisia
            </OPTION>
            <OPTION value="Turkey">
              Turkey
            </OPTION>
            <OPTION value="Turkmenistan">
              Turkmenistan
            </OPTION>
            <OPTION value="Turks">
              Turks
            </OPTION>
            <OPTION value="Uganda">
              Uganda
            </OPTION>
            <OPTION value="Ukraine">
              Ukraine
            </OPTION>
            <OPTION value="United Arab Emirates">
              United Arab Emirates
            </OPTION>
            <OPTION value="United States of America">
              United States of America
            </OPTION>
            <OPTION value="Uruguay">
              Uruguay
            </OPTION>
            <OPTION value="Uzbekistan">
              Uzbekistan
            </OPTION>
            <OPTION value="Venezuela">
              Venezuela
            </OPTION>
            <OPTION value="Vietnam">
              Vietnam
            </OPTION>
            <OPTION value="Virgin">
              Virgin
            </OPTION>
            <OPTION value="Virgin">
              Virgin
            </OPTION>
            <OPTION value="Yemen">
              Yemen
            </OPTION>
            <OPTION value="Zambia">
              Zambia
            </OPTION>
            <OPTION value="Zimbabwe">
              Zimbabwe
            </OPTION>
          </SELECT>
        </DIV>
      </DIV><!-- /.form-group -->
      <DIV class="form-group">
        <DIV class="col-sm-9 col-sm-offset-3">
          <BUTTON type="submit" class=
          "btn btn-primary btn-block">Register</BUTTON>
        </DIV>
      </DIV>
    </FORM><!-- /form -->
  </DIV><!-- ./container -->
</BODY>
</HTML>
