*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${BROWSER}    chrome
${WELCOME URL}    http://10.199.66.227/SoftEn2020/Sec02/Smurf/template/UIshowlist.php
${Device} 	msi
${Device1} 	msi monitor 25
${DELAY}		0

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
	Click Element    xpath=/html/body/div[2]/div[2]/div[1]/div[2]/form/select/option[2]
	Click button    search
	Wait Until Page Contains       Available
	Capture Page Screenshot     TC01[TestScenario2].jpg
	Close Browser
	
TC02(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Click Element    xpath=/html/body/div[2]/div[2]/div[1]/div[2]/form/select/option[3]
	Click button    search
	Wait Until Page Contains       Busy
	Capture Page Screenshot    TC02[TestScenario2].jpg
	Close Browser
	
TC03(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Click Element    xpath=/html/body/div[2]/div[2]/div[1]/div[2]/form/select/option[1]
	Click button    search
	Wait Until Page Contains       Busy
	Wait Until Page Contains       Available
	Capture Page Screenshot    TC03[TestScenario2].jpg
	Close Browser
	
TC04(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Input Text 		sechKeyword				${Device}
	Click Element    xpath=//html/body/div[2]/div[2]/div[1]/div[2]/form/select/option[1]
	Click button    search
	Wait Until Page Contains	   msi
	Capture Page Screenshot    TC04[TestScenario2].jpg
	Close Browser

TC05(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Input Text 		sechKeyword				${Device}
	Click Element    xpath=/html/body/div[2]/div[2]/div[1]/div[2]/form/select/option[2]
	Click button    search
	Wait Until Page Contains    msi
	Wait Until Page Contains    Available
	Capture Page Screenshot    TC05[TestScenario2].jpg
	Close Browser

TC06(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Input Text 		sechKeyword				${Device}
	Click Element    xpath=/html/body/div[2]/div[2]/div[1]/div[2]/form/select/option[3]
	Click button    search
	Wait Until Page Contains    msi
	Wait Until Page Contains    Busy
	Capture Page Screenshot    TC06[TestScenario2].jpg
	Close Browser

TC07(TestScenario2)
    Open Browser    ${WELCOME URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${WELCOME URL} 
	Input Text    sechKeyword     ${Device1}
	Click button    search
	Wait Until Page Contains       ไม่มีรายการอุปกรณ์ที่ค้นหา
	Capture Page Screenshot    TC07[TestScenario2].jpg
	Close Browser