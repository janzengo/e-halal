# E-Halal BTECHenyo Voting System

## **Overview**
E-Halal BTECHenyo is a **web-based voting system** designed to facilitate fair and transparent voting processes within the local environment of **Dalubhasaang Politekniko ng Lungsod ng Baliwag**. The system operates exclusively on a **local server**, ensuring that it can only be accessed within the institution's network.

**Links:** <br>
→ [See Figma Initial Prototype](https://www.figma.com/proto/PyxQjWxouDlXKTBSaruGKh/E-Halal-BTECHenyo-Prototype?node-id=0-1&t=6yoDj6zfz0dnNCCD-1)

## **Why Create a Web-based Voting System using PHP?**
Creating a web-based voting system using **PHP** is a practical choice because PHP is robust and widely-used **server-side scripting language** well-suited for building dynamic and secure web applications. PHP's flexibility allows for easy integration with **MySQL** databases, enabling efficient storage and retrieval of voter and election data. 

Key advantages of using PHP:
- **Secure Data Handling**: Form validation, session management, and encryption features.
- **Rapid Development**: Easily tailored to meet specific voting system requirements.
- **Scalable & Maintainable**: Can be adapted to future needs with ease.
- **Cost-effective**: Ideal for local deployments, such as within a school's local server.

## **Features of E-Halal BTECHenyo Voting System**
The E-Halal BTECHenyo web-based voting system comes with a range of features to ensure a smooth voting experience:

- **Election Management**: Election officers can create and manage elections, including specifying election details, setting start and end times, and uploading election-related files (e.g., PDFs).
- **Voter Import via CSV**: Election officers can import voter data, including student numbers, from a CSV file. This data is automatically used for creating user accounts and associated school email addresses.
- **Bulk Email Sending**: The system allows bulk-sending login credentials and randomly generated passwords to all registered students after voter data import.
- **Secure Login System**: Voters can securely log in using their student email and randomly generated password.
- **Real-time Election Status**: The system tracks and displays the current status of elections (e.g., on, off, paused, pending) and shows the remaining time for the election.
- **Candidate and Party List Management**: Admins can manage candidates, their respective positions, and party lists for the election.
- **Voting System**: Voters can vote for their preferred candidates for each position. The system ensures that only one vote is allowed per voter.
- **Vote Counting and Results**: After voting, the system automatically tallies votes and generates election results.
- **Audit Logs**: The system keeps logs of all actions performed by users for transparency and accountability.
- **User Role Management**: Different user roles (election officers, admins, and voters) are created with specific permissions.
- **Security and Encryption**: User data, including passwords and votes, is securely stored with encryption to ensure privacy and prevent unauthorized access.

## **The Steps**

### 1. **Database Design**
The first crucial step was designing the database schema. Our database includes the following key tables:
- **Users**: Stores voter information, such as name, email, and login credentials.
- **Candidates**: Stores candidate details, including name, party affiliation, platform, and photo.
- **Votes**: Tracks the votes cast by voters, capturing the user ID, candidate ID, and the vote timestamp.

### 2. **Front-End Development**
We focused on creating a **user-friendly interface**. The front-end includes:
- **Candidate Profiles**: Displays detailed candidate profiles, showcasing their background and platform.
- **Voting Page**: Allows users to select and submit their votes.
- **Results Page**: Displays real-time election results, updating automatically as votes are cast.

### 3. **Back-End Development**
On the back-end, we used **PHP** to implement core features such as:
- **Vote Counting and Validation**: Preventing invalid or duplicate votes.
- **Data Integrity**: Ensuring accurate and secure data processing.

### 4. **Testing and Deployment**
After testing, the system was deployed to a **local server** (XAMPP), making it accessible to election officers and voters.

## **E-Halal BTECHenyo Web-based Voting System Modules**

The system includes three main phases: **Pre-Voting**, **Voting**, and **Post-Voting**. Below is a breakdown of the major processes and modules.

### 1. **Pre-Voting Phase / Voter and Candidates’ Registration**
- **Voter Registration**: Election officers can import voter data via CSV, including student numbers, names, and email addresses. Login credentials are sent via email.
- **Candidate Registration**: Admins can register candidates with details such as name, party affiliation, platform, and photos.
- **Election Setup**: Admins define the election parameters like title, description, voting duration, and available positions.

### 2. **Voting Phase / Authentication, Casting of Votes, Confirmation**
- **Authentication**: Voters authenticate via their student email and password for secure access.
- **Voting**: Voters can select their preferred candidates. The system validates each vote.
- **Vote Confirmation**: After selecting candidates, voters review and confirm their votes before submission.

### 3. **Post-Voting Phase / Counts, Result, Audit**
- **Vote Counting**: The system automatically tallies votes using appropriate algorithms.
- **Results Page**: Displays real-time election results and statistics.
- **Audit Logs**: Logs of all actions performed during the election process are maintained for transparency.

## **Technology Used**

### **Programming Language:**
- **PHP** (Backend development)

### **Web Technologies:**
- **HTML5** (Structure and content)
- **CSS3** (Styling)
- **JavaScript** (Client-side interactivity)
- **JQuery** (DOM manipulation and AJAX requests)
- **Bootstrap** (Responsive design)

### **Libraries & Tools:**
- **TCPDF** (PDF generation for results)
- **DataTables** (Interactive tables)
- **Font Awesome** (Icons)
- **Morris.js** (Charts and data visualization)
- **Datepicker** (Date selection)
- **Slider** (Range input)
- **Timepicker** (Time selection)
- **Colorpicker** (Color selection)
- **FullCalendar** (Event management)

### **Database Management System:**
- **MySQL** (Database management)

### **Development Environment:**
- **XAMPP** (Local development server)

### **Additional Tools:**
- **CSV Import** (Voter data import)
- **Email System** (For sending login credentials to voters)

## **Installation**

### **Prerequisites**
- XAMPP (or any PHP server)
- A web browser

### **Steps to Install**
1. **Download and Install XAMPP**:
   - [XAMPP Download](https://www.apachefriends.org/index.html)
   - Follow the installation instructions for your OS.

2. **Clone or Download the Repository**:
   - Use Git:
     ```bash
     git clone <repository-url>
     ```
   - Or download and extract the ZIP file.

3. **Copy Project Files to XAMPP**:
   - Copy the files to the `htdocs` directory of XAMPP (default location: `C:\xampp\htdocs\`).

4. **Set Up Database**:
   - Open your browser and go to `http://localhost/phpmyadmin`.
   - Create a database (e.g., `e-halal`).
   - Import the provided SQL file.

5. **Configure the Application**:
   - Update the database connection settings in the `conn.php` file.

6. **Start the XAMPP Server**:
   - Open the XAMPP Control Panel and start the **Apache** server.

7. **Access the Application**:
   - Open your browser and go to `http://localhost/<project-folder-name>`.

## **Open Contribution**
We welcome contributions to improve the **E-Halal BTECHenyo Voting System**! Fork the repository and submit a pull request. You can also open issues to suggest enhancements or report bugs. Thanks!
