# ***Email authentication system to prevent data leakage of HTTP protocol***
## ENG Version
Although HTTPS was introduced, there are still a lot of people who use HTTP because of financial problems.  
Also HTTP is vulnerable to security because it sends an ID and password in plain language from the user's login screen.  
I wrote the code using PHP to prevent this problem.  
It is designed to send the authentication number by email whenever you Sign Up or Sign in.  
It can be very inconvenient for users, but it can be a temporary way out of the data leak.  
This program has been produced because I have confirmed that my ID and password have been leaked through the Wireshark program.  
Even if this method is applied, the ID and Password will still be leaked. However, the authentication number is not detected in the packet because the authentication number was generated using PHP language.  
The authentication number will temporarily be stored in the DB and then disappear.

## KOR version
HTTPS 프로토콜이 도입되었으나, 재정적인 문제로 인하여 아직 HTTP를 사용하는 사람들이 많습니다.  
또한, HTTP를 사용하는 홈페이지의 경우 로그인페이지에서 사용자가 입력한 데이터가 평문으로 서버에 전송됩니다.  
나는 이러한 문제를 예방해보고자 PHP 언어를 사용하여 작성하였습니다.  
이 코드들은 회원가입할때, 로그인할때마다 인증번호를 이메일로 보내도록 설계하였습니다.  
사용자에게는 매우 불편할 수 있지만, 데이터 유출로부터 일시적으로 벗어날 수 있는 방법이 될 수 있습니다.  
"Wireshark"를 통해 로그인창에서 ID와 Password가 유출되는 것을 확인하였기에 이 프로그램을 제작하였습니다.  
이 방법을 적용하여도 ID와 Password는 여전히 유출됩니다. 하지만 PHP언어를 사용하여 인증번호를 생성하였기 때문에 Packet에서 인증번호는 검출되지 않습니다.
인증번호는 DB에 일시적으로 저장될 것이며, 바로 삭제될 것입니다.  

--------------------------------------------------------------------------------------------
### Additional Implementation Part
Encrypt ID, password, and authentication number stored in DB  

### 추가 구현 예정 부분
데이터베이스에 저장되는 ID, Password, 인증번호 암호화
