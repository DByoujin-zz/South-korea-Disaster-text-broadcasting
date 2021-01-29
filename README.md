## 공공데이터포털 세팅
1. [여기](https://www.data.go.kr/data/3058822/openapi.do)에서 재난문자방송 오픈API를 발급신청을 한다. (로그인 필수)
1. 마이페이지 -> 재난문자방송 API 클릭 -> 일반 인증키를 복사합니다.

## php 세팅
"인증키" 부분을 복사한 일반 인증키로 변경합니다.
```
$path = "http://apis.data.go.kr/1741000/DisasterMsg2/getDisasterMsgList?ServiceKey=인증키&type=xml";
```

## 예제
https://esoftkorea.co.kr/disaster-text-broadcasting

## 주의사항
Openapi 특성상 사용자수가 많고, 내용물이 많은 API는 로딩이 오래걸립니다.

Json으로 신청하시면 안되고, Xml로 신청하시길 바랍니다.
이 예제에서는 Xml로 만들었습니다.
