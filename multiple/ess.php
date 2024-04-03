<input type="radio" name="gender" value="Male" onclick="displayRadioValue()">Male
                     

                      <input type="radio" name="gender" value="Female" onclick="displayRadioValue()">Female
              
                      <br>

                      <div id="result"><input type="text" name=""></div>
                      <script>
                          function displayRadioValue() {
                      var ele = document.getElementsByName('gender');
                
                              for(i = 0; i < ele.length; i++) {
                     

                                  if(ele[i].checked)
                     

                                  document.getElementById("result").innerHTML
                     

                                          = "Gender: "+ele[i].value;
                     

                              }
                    }
                      </script>