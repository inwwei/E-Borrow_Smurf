*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${BROWSER}    chrome
${WELCOME URL}    http://10.199.66.227/SoftEn2020/Sec02/Smurf/template/Maintain.php
${Empty}    
${DELAY}		0.1

*** Test Cases ***
TC01(TestScenario1)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL}
    Capture Page Screenshot    TC01[TestScenario1].jpg
	Close Browser

TC01(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Wait Until Page Contains       5602130000087
	Capture Page Screenshot     TC01[TestScenario2].jpg
	Close Browser
	
TC02(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Wait Until Page Contains       ชุดคอมพิวเตอร์ประมวลผลระดับสูง 1 ชุด
	Capture Page Screenshot     TC02[TestScenario2].jpg
	Close Browser
	
TC03(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Wait Until Page Contains       ครุภัณฑ์คอมพิวเตอร์
	Capture Page Screenshot     TC03[TestScenario2].jpg
	Close Browser
	
TC04(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Wait Until Page Contains       ปกติ
	Capture Page Screenshot     TC04[TestScenario2].jpg
	Close Browser

TC05(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Wait Until Page Contains       749000
	Capture Page Screenshot     TC05[TestScenario2].jpg
	Close Browser
	
TC01(TestScenario3)(valid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Click button    add
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/summary/strong
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[1]/select/option[14]
	Input Text    ItemID    5602070000053
	Input Text    ItemName    Iphone7
	Input Text    Detail     Ram 1 GB CPUcorei3 270GHz
	Input Text    Price    21000
	Input Text    Building    6021
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[7]/select/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/summary/strong
    Input Text    birthdaytime     29022020
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[1]/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[2]/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[3]/option[1]
	Click button    btnadd
    Handle Alert    accept
	Close Browser

TC02(TestScenario3)(Invalid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Click button    add
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/summary/strong
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[1]/select/option[14]
	Input Text    ItemID    CS5602070000053
	Input Text    ItemName    Iphone7
	Input Text    Detail     Ram 1 GB CPUcorei3 270GHz
	Input Text    Price    21000
	Input Text    Building    6021
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[7]/select/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/summary/strong
    Input Text    birthdaytime     29022020
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[1]/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[2]/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[3]/option[1]
	Click button    btnadd
	Close Browser

TC03(TestScenario3)(Invalid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Click button    add
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/summary/strong
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[1]/select/option[14]
	Input Text    ItemID    5602070000053
	Input Text    ItemName    Iphone7
	Input Text    Detail     Ram 1 GB CPUcorei3 270GHz
	Input Text    Price    21000
	Input Text    Building    6021
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[7]/select/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/summary/strong
    Input Text    birthdaytime     29022020
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[1]/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[2]/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[3]/option[1]
	Submit Form
    Handle Alert    accept
	Close Browser
	
TC04(TestScenario3)(Invalid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Click button    add
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/summary/strong
	Input Text    ItemID    5602070000053
	Input Text    ItemName    Iphone7
	Input Text    Detail     Ram 1 GB CPUcorei3 270GHz
	Input Text    Price    21000
	Input Text    Building    6021
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[7]/select/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/summary/strong
    Input Text    birthdaytime     29022020
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[1]/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[2]/option[1]
	Click Element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/select[3]/option[1]
	Submit Form
    Handle Alert    accept
	Close Browser

TC01(TestScenario4)(valid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL}
    Click Element    xpath=/html/body/div[4]/div/table/tbody/tr[2]/td[13]/a[1]/button
	Click Element    xpath=/html/body/div[4]/div/div[2]/form/details[1]/summary/strong
	Click Element    xpath=/html/body/div[4]/div/div[2]/form/details[1]/div/div[2]/div/div[1]/select/option[3]
	Submit Form
	Handle Alert    accept
	Close Browser
	
TC02(TestScenario4)(valid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL}
    Click Element    xpath=/html/body/div[4]/div/table/tbody/tr[2]/td[13]/a[1]/button
	Click Element    xpath=/html/body/div[4]/div/div[2]/form/details[1]/summary/strong
	Input Text    ItemName    Iphone Edit
	Submit Form
	Handle Alert    accept
	Close Browser

TC03(TestScenario4)(valid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL}
    Click Element    xpath=/html/body/div[4]/div/table/tbody/tr[2]/td[13]/a[1]/button
	Click Element    xpath=/html/body/div[4]/div/div[2]/form/details[1]/summary/strong
	Input Text    Detail    Ram 2 GB CPUcorei5 570GHz
	Submit Form
	Handle Alert    accept
	Close Browser

TC04(TestScenario4)(valid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL}
    Click Element    xpath=/html/body/div[4]/div/table/tbody/tr[2]/td[13]/a[1]/button
	Click Element    xpath=/html/body/div[4]/div/div[2]/form/details[1]/summary/strong
	Input Text    Price    18000
	Submit Form
	Handle Alert    accept
	Close Browser

TC05(TestScenario4)(valid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL}
    Click Element    xpath=/html/body/div[4]/div/table/tbody/tr[2]/td[13]/a[1]/button
	Click Element    xpath=/html/body/div[4]/div/div[2]/form/details[1]/summary/strong
	Input Text    Building    6204
	Submit Form
	Handle Alert    accept
	Close Browser

TC06(TestScenario4)(Invalid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Click Element    xpath=/html/body/div[4]/div/table/tbody/tr[2]/td[13]/a[1]/button
	Click Element    xpath=/html/body/div[4]/div/div[2]/form/details[1]/summary/strong
	Input Text    ItemName    ${Empty}        
	Submit Form	
	Handle Alert    accept
	Close Browser
	
TC01(TestScenario5)(valid)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Click Element    xpath=/html/body/div[4]/div/table/tbody/tr[2]/td[13]/a[2]/button
	Handle Alert    accept
	Handle Alert    accept
	Close Browser


	



