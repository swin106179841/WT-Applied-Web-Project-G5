# WT-Applied-Web-Project-G5
## Scenario
An environmental organisation strengthening its online presence to promote conservation projects, community campaigns, educational resources, volunteer opportunities and public donations. 
## Page Requirements
### index.html
- Company logo
- Company name
- Company slogan
- Company description
- Suitable image or visual content
- Common navigation menu used consistently across all pages
- Footer containing:
    - Jira project link
    - GitHub repository link
    - Email link, for example info@companyname.com

- At least one meaningful table demonstrating cell merging
- One meaningful element acknowledging or supporting Aboriginal and Torres Strait Islander peoples in a respectful and authentic way.

This may include an Acknowledgement of Country, inclusive employment statement, commitment to reconciliation or community partnerships, or a statement encouraging applications from Aboriginal and Torres Strait Islander peoples.

The inclusion must be relevant and thoughtfully presented. Decorative content without appropriate context will not satisfy this requirement.
### jobs.html
Include at least three realistic and industry-appropriate job descriptions.

Each position must include:
    - reference number containing exactly six alphanumeric  - characters
    - job title
    - short description
    - salary
    - reporting line
    - key responsibilities
    - essential requirements
    - preferable requirements
The page must also demonstrate:
    - at least two heading levels
    - multiple ```<section>``` elements
    - at least one ordered list
    - at least one unordered list
    - at least one meaningful ```<aside>```
    - appropriate semantic HTML structure
### apply.html
Create a job application form using suitable HTML5 form controls and validation. Use patterns or regular expressions where appropriate.

The form must use the **POST** method and the following action: ```https://mercury.swin.edu.au/it000000/formtest.php```
#### Required Form Fields: 
- **Job reference number**: Exactly 6 alphanumeric characters
- **First name**: Maximum 20 alphabetic characters
- **Last name**: Maximum 20 alphabetic characters
- **Date of birth**: dd/mm/yyyy
- **Gender**: Radio buttons using an appropriate fieldset and legend
- **Street address**: Maximum 40 characters
- **Suburb/Town**: Maximum 40 characters
- **State**: Dropdown: VIC, NSW, QLD, NT, WA, SA, TAS, ACT
- **Postcode**: Exactly 4 digits
- **Email**: Valid email format
- **Phone number**: 8–12 digits
- **Skill list**: Checkbox inputs
- **Other skills**: Textarea

Every form control must have an appropriate label. All fields except the Other Skills textarea must be required. 
### about.html
- Group name and tutorial class day/time presented using a nested list
- Member contributions presented using a definition list
- Include a quote from each member in their first language (Something you enjoy or feel strongly about.) and provide an English translation. If English is your first language, you may use a quote in another language of your choice.
- One group photo, rather than separate individual photos, less than 300 KB and presented using <figure> and <figcaption>
- A table presenting suitable fun facts about team members, including a caption
## Requirements Across All Pages
- Use a common and consistent navigation menu.
- Use appropriate semantic HTML elements.
- Use a logical heading hierarchy.
- Validate as HTML5.
- Follow the accessibility requirements provided in the unit.
- Use clear and readable code formatting.
- Use appropriate comments where they support code understanding.
- Include appropriate acknowledgements for externally sourced or GenAI-generated content.
## CSS and Responsive Design Requirements
The main styling for the website must be contained in an external stylesheet named ```styles.css```.
- Demonstrate at least one appropriate example of embedded CSS on each page.
- Demonstrate at least one appropriate example of inline CSS on each page.
- Use the external stylesheet for the main visual design of the website.
- Demonstrate a suitable range of CSS selectors.
- Organise CSS clearly and include useful comments.
- Implement responsive layouts that adapt appropriately to different screen sizes.
- Apply accessibility principles to visual presentation, including readable content and suitable contrast.
### Page Specific CSS Requirements
- **index.html**: Include a background graphic implemented using CSS.
- **jobs.html**: Style the ```<aside>``` so that it is positioned appropriately beside the main content and uses suitable width, margin, padding and border styling.
- **about.html**: Style student IDs, the group figure and the team table. Demonstrate hexadecimal colour values and an appropriate hover effect.
- **apply.html**: Use CSS Flexbox or Grid to organise the form layout.