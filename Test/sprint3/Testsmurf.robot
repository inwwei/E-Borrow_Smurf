*** Settings ***
Library    SeleniumLibrary


*** Variables ***
${BROWSER}    chrome
${WELCOME URL}    http://10.199.66.227/SoftEn2020/Sec02/Smurf/template/Maintain.php
${Index URL}    http://10.199.66.227/SoftEn2020/Sec02/Smurf/template/index.php
${EMPTY}    
${DELAY}		0.2

*** Test Cases ***
TC01(TestScenario1) Valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form
    Close Browser
	
TC01(TestScenario2) Valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[1]/a
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/summary/strong
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/summary/strong
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[1]/select/option[14]
	input text    ItemID    6202130005023
	input text    ItemName    MSI762
	input text    Detail    Ram8GB windows10 64bit
	input text    Price    120000
	input text    Building    6024
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[7]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[1]/select/option[1] 	
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[2]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[3]/select/option[1]
    input Text    Add_Date    14030020200000am
	Submit Form
	Handle Alert    accept
    Close Browser

TC02(TestScenario2) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[1]/a
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/summary/strong
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/summary/strong
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[1]/select/option[14]
	input text    ItemID    6202130005023
	input text    ItemName    MSI762
	input text    Detail    Ram8GB windows10 64bit
	input text    Price    120000
	input text    Building    6024
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[7]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[1]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[2]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[3]/select/option[1]
    input Text    Add_Date    14030020200000am
	Submit Form
	Handle Alert    accept
	Handle Alert    accept
	Close Browser
	

TC03(TestScenario2) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[1]/a
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/summary/strong
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/summary/strong
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[1]/select/option[14]
	input text    ItemID    6202130005023
	input text    Detail    Ram8GB windows10 64bit
	input text    Price    15000
	input text    Building    6024
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[7]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[1]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[2]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[3]/select/option[1]
    input Text    Add_Date    14030020200000am
	Submit Form
	Handle Alert    accept
	Handle Alert    accept
	Close Browser

TC04(TestScenario2) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[1]/a
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/summary/strong
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/summary/strong
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[1]/select/option[14]
	input text    ItemID    6202130005023
	input text    ItemName    MSI762
	input text    Detail    Ram8GB windows10 64bit
	input text    Price    15000
	input text    Building    6024
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[7]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[1]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[2]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[3]/select/option[1]
    input Text    Add_Date    14030020200000am
	Submit Form
	Handle Alert    accept
	Handle Alert    accept
	Close Browser

TC05(TestScenario2) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[1]/a
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/summary/strong
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/summary/strong
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[1]/select/option[14]
	input text    ItemID    6202130005023
	input text    ItemName    MSI762
	input text    Detail    Ram8GB windows10 64bit
	input text    Price    15000
	input text    Building    6024
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[1]/div/div[2]/div/div[7]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[1]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[2]/select/option[1]
	Click element    xpath=/html/body/div[4]/div[1]/div[2]/form/details[2]/div/div[2]/div/div[3]/select/option[1]
	Submit Form
	Handle Alert    accept
	Handle Alert    accept
	Close Browser


TC01(TestScenario3) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[2]/a
	Input Text    TypeName    อุปกรณ์ทางการแพทย์
	Click Button    btnadd
	Handle alert    accept
	Close Browser

TC02(TestScenario3) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[2]/a
	Click Button    btnadd
	Close Browser

TC03(TestScenario3) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[2]/a
	Click Button    btnadd
	Close Browser


TC04(TestScenario3) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[2]/a
	Wait Until Page Contains      อุปกรณ์ทางการแพทย์
	Close Browser

TC05(TestScenario3) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[2]/a
	Click element    xpath=/html/body/div[4]/table/tbody[2]/tr[1]/td[3]/a[1]/button
	Input text    TypeName    อาคารถาวรแก้ไข
	Close Browser
	
TC06(TestScenario3) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[2]/a
	Click element    xpath=/html/body/div[4]/table/tbody[2]/tr[1]/td[3]/a[1]/button
	Input text    TypeName    ${EMPTY}
	Submit Form
	Handle Alert    accept
	Close Browser

TC01(TestScenario4) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/header/nav/div[2]/ul/li[4]/a
	Close Browser

TC01(TestScenario5) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/div[4]/div/table/tbody/tr[16]/td[8]
    Click element    xpath=/html/body/div[4]/div/table/tbody/tr[14]/td[13]/a[1]/button
	Click element    xpath=/html/body/div[4]/div/div[1]/form/details[2]/summary/strong
	Click element    xpath=/html/body/div[4]/div/div[1]/form/details[1]/summary/strong
	Click element    xpath=/html/body/div[4]/div/div[1]/form/details[2]/div/div[2]/select[1]/option[3]
    Click element    xpath=/html/body/div[4]/div/div[1]/form/details[2]/div/div[2]/select[2]/option[3]
	Click element    xpath=/html/body/div[4]/div/div[1]/form/details[2]/div/div[2]/select[3]/option[3]
    Submit Form
	Handle alert    Accept
	Close Browser


TC02(TestScenario5) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form
    Click element    xpath=/html/body/div[4]/div/table/tbody/tr[16]/td[9]
    Click element    xpath=/html/body/div[4]/div/table/tbody/tr[14]/td[13]/a[1]/button
	Click element    xpath=/html/body/div[4]/div/div[1]/form/details[1]/summary
	Input text    ItemID    ${EMPTY}
	Submit Form
	Close Browser

TC01(TestScenario6) Valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form
    Click element    xpath=/html/body/div[4]/div/table/tbody/tr[16]/td[9]
    Click element    xpath=/html/body/div[4]/div/table/tbody/tr[15]/td[13]/a[3]/button
	Close Browser
	
TC01(TestScenario7) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    6030204977
	Input Text    password    6030204977
	Submit Form
	Close Browser
	

	
TC01(TestScenario8) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    6030204977
	Input Text    password    6030204977
	Submit Form
    Click element    xpath=/html/body/div[2]/div[2]/div[2]/table/tbody/tr[1]/td[7]/a/button
	Click element    xpath=/html/body/div[4]/div/div[2]/form/details[2]/summary/strong
	Click element    xpath=/html/body/div[4]/div/div[2]/form/details[1]/summary/strong
	Input Text    reason    ทำโปรเจค
	Input Text    End_Date    1803002020
	Submit Form
	Handle alert    accept
    Close Browser
	
TC02(TestScenario8) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    6030204977
	Input Text    password    6030204977
	Submit Form
    Click element    xpath=/html/body/div[2]/div[2]/div[2]/table/tbody/tr[1]/td[7]/a/button
	Submit Form
    Close Browser
	
TC03(TestScenario8) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    6030204977
	Input Text    password    6030204977
	Submit Form
    Click element    xpath=/html/body/div[2]/div[2]/div[2]/table/tbody/tr[1]/td[7]/a/button
	Click element    xpath=/html/body/div[4]/div/div[2]/form/details[2]/summary/strong
	Click element    xpath=/html/body/div[4]/div/div[2]/form/details[1]/summary/strong
	Input Text    reason    ทำโปรเจค
	Input Text    End_Date    {EMPTY}
	Submit Form
    Close Browser
	
TC04(TestScenario8) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    6030204977
	Input Text    password    6030204977
	Submit Form	
	Click element    xpath=/html/body/header/nav/div[2]/ul/li/a
	Close Browser
	
TC01(TestScenario9) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form    
    Click element    xpath=/html/body/div[4]/div/table/tbody/tr[16]/td[8]
    Click element    xpath=/html/body/div[4]/div/table/tbody/tr[14]/td[13]/a[1]/button
	Click element    xpath=/html/body/div[4]/div/div[1]/form/details[2]/summary/strong
	Click element    xpath=/html/body/div[4]/div/div[1]/form/details[1]/summary/strong
	Click element    xpath=/html/body/div[4]/div/div[1]/form/details[2]/div/div[2]/select[1]/option[2]
    Click element    xpath=/html/body/div[4]/div/div[1]/form/details[2]/div/div[2]/select[2]/option[2]
	Click element    xpath=/html/body/div[4]/div/div[1]/form/details[2]/div/div[2]/select[3]/option[2]
    Submit Form
	Handle alert    Accept
	Close Browser
	
TC01(TestScenario9) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form	
	Click element    xpath=/html/body/div[4]/div/table/tbody/tr[15]/td[9]
	Click element    xpath=/html/body/div[4]/div/table/tbody/tr[14]/td[13]/a[2]/button
	input text    mail    chitsutha@kku.ac.th
	Submit Form
	Click element    xpath=/html/body/div[4]/div/div[2]/form/details[2]/summary/strong
	Click element    xpath=/html/body/div[4]/div/div[2]/form/details[1]/summary/strong
	Input text    reason    ทำโปรเจค
	Input text    End_Date    1803002020
	Submit Form
	Handle alert    accept
	Close Browser
	
TC02(TestScenario9) Invalid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form	
	Click element    xpath=/html/body/div[4]/div/table/tbody/tr[15]/td[9]
	Click element    xpath=/html/body/div[4]/div/table/tbody/tr[14]/td[13]/a[2]/button
	input text    mail    test@kku.ac.th
	Submit Form
	Close browser

TC01(TestScenario10) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form	
	Click element    xpath=/html/body/header/nav/div[2]/ul/li[3]/a
	Click element    xpath=/html/body/div[4]/div/table/tbody/tr/td[8]/a[1]/button
	Close Browser	
	
TC02(TestScenario10) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form	
	Click element    xpath=/html/body/header/nav/div[2]/ul/li[3]/a
	Click element    xpath=/html/body/div[4]/div/table/tbody/tr/td[8]/a[2]/button
	Close Browser

TC03(TestScenario10) valid
    Open Browser    ${Index URL}    ${BROWSER}
	Set Selenium Speed 		${DELAY}
    Location Should Be    ${Index URL}
	Input Text    username    admin
	Input Text    password    admin
	Submit Form	
	Click element    xpath=/html/body/header/nav/div[2]/ul/li[4]/a
	Close Browser
	
	