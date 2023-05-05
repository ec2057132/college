<!-- Base Template -->
<?php include("includes/base.php"); ?>
    <!-- Title -->
    <title>Netbook | Register</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_register.css">
  </head>
  <body>
    <div class="container">
      <div class="main-sec">

        <div id="mid-col">

          <!-- Name -->
          <div id="name-sec">
            <h1 id="name">
              Netbook
            </h1>
          </div>

          <!-- Regsiter Section -->
          <div id="reg-sec-1">
            <!-- Heading -->
            <div id="heading-sec">
              <h3 id="heading">Create New Account</h3>
              <h5 id="tagline">Join Us. Thrive.</h5>
            </div>
            <!-- Line Break -->
            <div class="horizontal-line"></div>
            <!-- Register Form -->
              <input type="text" name="fname" required class="input-top input-half" id="fName" placeholder="First Name" autocomplete="off">
              <input type="text" name="sname" required class="input-top input-half" id="sName" placeholder="Surname" autocomplete="off">
              <input type="text" name="email" required class="input input-full" id="e" placeholder="Email Address" autocomplete="off">
              <input type="text" name="num" required class="input input-full" id="pNum" placeholder="Contact Number" autocomplete="off">
              <div class="drop-label">
                <p class="drop-label-text">
                  Date of Birth:
                </p>
              </div>
              
              <div class="row" id="date-sec">
                <div class="col-4" id="drop-left">
                  <select name="day" required size="1" class="input-top input-drop input-full" id="dob-d">
                    <option value="1" default>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                </div>
                <div class="col-4" id="drop-mid">
                  <select name="month" required size="1" class="input-top input-drop input-full" id="dob-m">
                    <option value="1" default>Jan</option>
                    <option value="2">Feb</option>
                    <option value="3">Mar</option>
                    <option value="4">Apr</option>
                    <option value="5">May</option>
                    <option value="6">Jun</option>
                    <option value="7">Jul</option>
                    <option value="8">Aug</option>
                    <option value="9">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                  </select>
                </div>
                <div class="col-4" id="drop-right">
                  <select name="year" required size="1" class="input-top input-drop input-full" id="dob-y">
                    <option value=2023 default>2023</option>
                    <option value=2022>2022</option>
                    <option value=2021>2021</option>
                    <option value=2020>2020</option>
                    <option value=2019>2019</option>
                    <option value=2018>2018</option>
                    <option value=2017>2017</option>
                    <option value=2016>2016</option>
                    <option value=2015>2015</option>
                    <option value=2014>2014</option>
                    <option value=2013>2013</option>
                    <option value=2012>2012</option>
                    <option value=2011>2011</option>
                    <option value=2010>2010</option>
                    <option value=2009>2009</option>
                    <option value=2008>2008</option>
                    <option value=2007>2007</option>
                    <option value=2006>2006</option>
                    <option value=2005>2005</option>
                    <option value=2004>2004</option>
                    <option value=2003>2003</option>
                    <option value=2002>2002</option>
                    <option value=2001>2001</option>
                    <option value=2000>2000</option>
                    <option value=1999>1999</option>
                    <option value=1998>1998</option>
                    <option value=1997>1997</option>
                    <option value=1996>1996</option>
                    <option value=1995>1995</option>
                    <option value=1994>1994</option>
                    <option value=1993>1993</option>
                    <option value=1992>1992</option>
                    <option value=1991>1991</option>
                    <option value=1990>1990</option>
                    <option value=1989>1989</option>
                    <option value=1988>1988</option>
                    <option value=1987>1987</option>
                    <option value=1986>1986</option>
                    <option value=1985>1985</option>
                    <option value=1984>1984</option>
                    <option value=1983>1983</option>
                    <option value=1982>1982</option>
                    <option value=1981>1981</option>
                    <option value=1980>1980</option>
                    <option value=1979>1979</option>
                    <option value=1978>1978</option>
                    <option value=1977>1977</option>
                    <option value=1976>1976</option>
                    <option value=1975>1975</option>
                    <option value=1974>1974</option>
                    <option value=1973>1973</option>
                    <option value=1972>1972</option>
                    <option value=1971>1971</option>
                    <option value=1970>1970</option>
                    <option value=1969>1969</option>
                    <option value=1968>1968</option>
                    <option value=1967>1967</option>
                    <option value=1966>1966</option>
                    <option value=1965>1965</option>
                    <option value=1964>1964</option>
                    <option value=1963>1963</option>
                    <option value=1962>1962</option>
                    <option value=1961>1961</option>
                    <option value=1960>1960</option>
                    <option value=1959>1959</option>
                    <option value=1958>1958</option>
                    <option value=1957>1957</option>
                    <option value=1956>1956</option>
                    <option value=1955>1955</option>
                    <option value=1954>1954</option>
                    <option value=1953>1953</option>
                    <option value=1952>1952</option>
                    <option value=1951>1951</option>
                    <option value=1950>1950</option>
                    <option value=1949>1949</option>
                    <option value=1948>1948</option>
                    <option value=1947>1947</option>
                    <option value=1946>1946</option>
                    <option value=1945>1945</option>
                    <option value=1944>1944</option>
                    <option value=1943>1943</option>
                    <option value=1942>1942</option>
                    <option value=1941>1941</option>
                    <option value=1940>1940</option>
                    <option value=1939>1939</option>
                    <option value=1938>1938</option>
                    <option value=1937>1937</option>
                    <option value=1936>1936</option>
                    <option value=1935>1935</option>
                    <option value=1934>1934</option>
                    <option value=1933>1933</option>
                    <option value=1932>1932</option>
                    <option value=1931>1931</option>
                    <option value=1930>1930</option>
                    <option value=1929>1929</option>
                    <option value=1928>1928</option>
                    <option value=1927>1927</option>
                    <option value=1926>1926</option>
                    <option value=1925>1925</option>
                    <option value=1924>1924</option>
                    <option value=1923>1923</option>
                    <option value=1922>1922</option>
                    <option value=1921>1921</option>
                    <option value=1920>1920</option>
                    <option value=1919>1919</option>
                    <option value=1918>1918</option>
                    <option value=1917>1917</option>
                    <option value=1916>1916</option>
                    <option value=1915>1915</option>
                    <option value=1914>1914</option>
                    <option value=1913>1913</option>
                    <option value=1912>1912</option>
                    <option value=1911>1911</option>
                    <option value=1910>1910</option>
                    <option value=1909>1909</option>
                    <option value=1908>1908</option>
                    <option value=1907>1907</option>
                    <option value=1906>1906</option>
                    <option value=1905>1905</option>
                    <option value=1904>1904</option>
                    <option value=1903>1903</option>
                    <option value=1902>1902</option>
                    <option value=1901>1901</option>
                    <option value=1900>1900</option>
                    <option value=1899>1899</option>
                    <option value=1898>1898</option>
                  </select>
                </div>
              </div>

              <div class="drop-label">
                <p class="drop-label-text">
                  Country:
                </p>
              </div>
              <select name="country" required size="1" class="input-top input-full" id="country">
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="The Bahamas">The Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cabo Verde">Cabo Verde</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                <option value="Congo, Republic of the">Congo, Republic of the</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Eswatini">Eswatini</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="Gabon">Gabon</option>
                <option value="The Gambia">The Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Greece">Greece</option>
                <option value="Grenada">Grenada</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Honduras">Honduras</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, North">Korea, North</option>
                <option value="Korea, South">Korea, South</option>
                <option value="Kosovo">Kosovo</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="North Macedonia">North Macedonia</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Qatar">Qatar</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Sudan, South">Sudan, South</option>
                <option value="Suriname">Suriname</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom" selected="selected">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City">Vatican City</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
              <input type="password" required class="input input-half" id="pwd1" placeholder="New Password" autocomplete="off">
              <input type="password" required class="input input-half" id="pwd2" placeholder="Confirm Password" autocomplete="off">
              <input type="submit" value="Next" id="reg-btn" onclick="verifyInput()">
            <!-- Line Break -->
            <div class="horizontal-line"></div>
            <!-- Login Link -->
            <div id="login-btn-section">
              <a href="index.php" id="login-link">
                Already got an Account?
              </a>
            </div>
          </div>

          <div id="reg-sec-2" style="display: none;">
            <div class="panel-box">
              <div class="heading-title">
                <h3 class="title">Create Your Security Questions</h3>
              </div>
              <!-- Line Break -->
              <div class="horizontal-line-2"></div>

              <div id="form-sec-2">
                <form onsubmit="return sendFormData()">
                
                  <div class="question-sec">
                    <select size="1" class="input-top input-full-q" id="q1">
                      <option value="1">What is your mother's maiden name?</option>
                      <option value="2">What is your father's middle name?</option>
                      <option value="3">What highschool did you attend?</option>
                    </select>
                  </div>
                  <input type="text" class="input input-q" id="qa1" placeholder="Your Answer..." autocomplete="off">
                  
                  <div class="question-sec">
                    <select class="input input-full-q" id="q2">
                      <option value="4">What is the name of your favourite pet?</option>
                      <option value="5">What was your favourite food as a child?</option>
                      <option value="6">What city or town did your parents meet?</option>
                    </select>
                  </div>
                  <input type="text" class="input input-q" id="qa2" placeholder="Your Answer..." autocomplete="off">
  
                  <div class="horizontal-line-2"></div>
                  
                  <div id="btn-sec">
                    <input type="submit" value="Register" id="recover-btn">
                  </div>

                </form>
                
                <div>
                  <button class="input" id="login-link-2" onclick="hideForm('reg-sec-2', 'reg-sec-1')">Back</button>
                </div>
                
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="flashbar"></div>
    <script src="javascript/register_script.js"></script>
  </body>
</htmml>