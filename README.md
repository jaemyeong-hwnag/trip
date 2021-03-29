# trip
  온라인 여행 대행 서비스
  http://trip.trun.ml/

* Author : W3layouts
* Author URL : http://w3layouts.com
* License : Creative Commons Attribution 3.0 Unported
* License URL : http://creativecommons.org/licenses/by/3.0/
* template URL : https://w3layouts.com/tourism-travel-category-flat-bootstrap-responsive-web-template/

## 버전 정보
* PHP : 7.4.10
* DB : 10.5.5-MariaDB
* CI4(CodeIgniter4) : 4.0.4

## CodeIgniter4 기본 설명
 - /app
   - /Config : 구성 파일 저장
   - /Controllers : 프로그램 흐름을 결정하는 컨트롤러
   - /Database : 데이터베이스 마이그레이션 및 시드(seed) 파일 저장
   - /Filters : 컨트롤러 전후에 실행할 수 있는 필터 클래스 저장
   - /Helpers : 독립형 함수 모음(Helper) 저장
   - /Language : 다국어 지원을 위한 언어 파일 저장
   - /Libraries : 카테고리에 포함되지 않는 유용한 클래스 모음
   - /Models : 데이터베이스와 함께 작동하는 모델 저장
   - /ThirdParty : 어플리케이션에서 사용할 수 있는 타사 라이브러리
   - /Views : 클라이언트에 표시되는 HTML로 구성된 뷰
 - /system : 이 디렉토리는 프레임워크 자체를 구성하는 파일을 저장합니다. 디렉토리의 파일은 절대 수정해서는 안됩니다.
 - /public : CSS, javascript 또는 이미지와 같이 추가한 모든 어플리케이션 자산이 포함됩니다. 이 폴더는 사이트의 “웹 루트(web root)”를 의미
 - /writable : 캐시 파일, 로그 및 사용자가 업로드한 데이터를 저장하기 위한 디렉터리가 포함

## 회원 비밀번호 암호화
 - /.env 파일에 암호화 정보 저장
 - /app/Helpers/security_helper.php 암복호화 함수
 - /app/Controllers/BaseController.php에 보안관련 헬퍼 불러오기

## Controllers 정보
 - FILTER_SANITIZE_SPECIAL_CHARS : 매개변수 혹은 파라미터의 값의 특수문자 이스케이프

 ## 헬퍼(helper)
  - security_helper.php
   - 암복호화 파일
   - .env의 정보를 가지고 암복호화 함수
## ssl 적용
```
# vi httpd-le-ssl.conf
<IfModule mod_ssl.c>
<VirtualHost *:443>
 ServerName trip.trun.ml
 DocumentRoot /var/www/html/php/trip/public/
RewriteEngine on
# Some rewrite rules in this file were disabled on your HTTPS site,
# because they have the potential to create redirection loops.

# RewriteCond %{SERVER_NAME} =trip.trun.ml
# RewriteRule ^ https://%{SERVER_NAME}%{REQUEST_URI} [END,NE,R=permanent]
SSLCertificateFile /etc/letsencrypt/live/trip.trun.ml/cert.pem
SSLCertificateKeyFile /etc/letsencrypt/live/trip.trun.ml/privkey.pem
Include /etc/letsencrypt/options-ssl-apache.conf
SSLCertificateChainFile /etc/letsencrypt/live/trip.trun.ml/chain.pem
</VirtualHost>
</IfModule>
```
