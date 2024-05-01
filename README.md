# feature-ask-your-question-pdp-admin-ui-grid
 Customer question tab section in PDP &amp; Admin UI grid

# Magento version : 2.4.7

# Vendor Name: GXL
Module Name: CustomerQuestions

# Customer Questions Module : 
# 1. Create Customer Questions Form on Luma Theme Product Page:
   Implement a customer questions form on the product page. Add an extra tab section for 'Ask Your Questions' to the Magento Luma theme. The form should consist of fields for name, email, and questions.
![image](https://github.com/Kiruthika16799/feature-ask-your-question-pdp-admin-ui-grid/assets/62058246/c0353738-3044-4320-8c29-fbc29c562604)

# 2. Develop Admin Custom Grid Using UI Components:
   Build an admin custom grid using UI components to store the values submitted through the customer questions form.
![image](https://github.com/Kiruthika16799/feature-ask-your-question-pdp-admin-ui-grid/assets/62058246/9be6bc88-0774-4a5b-ab02-fb26ff5dfdb7)

# 3. Establish REST API Endpoint to Retrieve Customer Questions Data:
   Set up a REST API endpoint to retrieve all customer questions data.
# API Endpoint : http://magento247.loc/rest/V1/customer/questions
# Method : GET 
# Response :
[
    {
        "id": "1",
        "name": "Kiruthika S",
        "email": "kiruthika16799@outlook.com",
        "questions": "Sample ",
        "created_at": "2024-05-01 12:20:42"
    },
    {
        "id": "2",
        "name": "Keerthi",
        "email": "kiruthika16799@gmail.com",
        "questions": "test sample",
        "created_at": "2024-05-01 12:21:12"
    }
]
# Postman output : ![Screenshot from 2024-05-01 17-54-54](https://github.com/Kiruthika16799/feature-ask-your-question-pdp-admin-ui-grid/assets/62058246/44ae159d-42f3-4a08-85dc-e6ca2e03d4e9)

# 4. Implement REST API Endpoint for Posting New Questions:
   Develop a REST API endpoint to enable the posting of new questions.
# API Endpoint : http://magento247.loc/rest/V1/customer/questions?name=test&email=test@gmail.com&question=test questions
# Method : Post 
# Response : true
# Postman output : ![Screenshot from 2024-05-01 17-57-29](https://github.com/Kiruthika16799/feature-ask-your-question-pdp-admin-ui-grid/assets/62058246/7df73ab0-04bb-4c9f-a725-5f570781eb82)




