<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="shortcut icon" href="{{ asset("frontend/image/logo-white-bg-circle.png") }}"type="image/x-icon">
    <link rel="stylesheet" href="{{asset("frontend/css/test-form-style.css")}}">
</head>
<body>
    <table align="center">
            <form>
            <tr>
                <th>
                    <div class="head-logo">
                        <img src="./image/logo-white-bg-circle.png"  alt="college logo" width="80" height="80">
                    </div>
                </th>
                <th>
                    <div class="heading">
                        <p class="head-name">
                            System Bull ICT College
                        </p>
                        <p class="head-address" style="font-weight: 100;">
                        Teku-12, Mayalbari, kathmandu | Phone: 01-5922111
                        </p>
                        <p class="head-mail" style="font-weight: 100;">
                            Email: info@systembull.edu.np
                        </p>
                        <p class="form-title">
                            Admission Form
                        </p>
                    </div>
                </th>
                <th>
                     <div class="photo-place">
                            <label for="photo">Recent Passport Size Photo</label><br>
                                <input type="file" name="photo">
                    </div>
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="compulsary">
                        Field with (*) are Compulsary
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="student-info title">
                        Student's Information
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="full-name">
                        Name of The Applicant ( Full Name)*: <br>
                        <input type="text" name="applicantname" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="course-stdlvl input-text">
                        <label for="applly">Applied For :</label>
                        <select name="apply" class="course-option">
                            <option value="default">Choose One</option>
                            <option value="DICT">Diploma in Information and Communication Technology</option>
                            <option value="full-stack-1">Junior Full Stack Developer</option>
                            <option value="full-stack-2">Senior Full Stack Developer</option>
                        </select>
                        <td colspan="2">
                            Current Study Level :
                            <input type="text" name="study-level"/>
                        </td>
                    </div>
                </td>
            </tr>
            <tr>
                    <td>
                        Gender :
                <input type="radio" name="gender">
                <label for="male">
                    Male
                </label>
                <input type="radio" name="gender"> 
                <label for="female">
                    Female
                </label>
                </td>
                <td>
                <label for="nationality"> Nationality :</label>
                <select name="nationality" id="country">
                    <option value="Country">Country</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Nepal">India</option>
                    <option value="Nepal">Sirlanka</option>
                    <option value="Nepal">Bangladesh</option>
                </select>
                </td>
                <td>
                         Emali :
                    <input type="text" name="mail">
                    </td>
            </tr>
            <tr>
                <div class="dob">
                    <td>
                        Date Of Birth :
                        A.D
                        <input type="date" name="dob">
                    </td>
                    <td>                       
                        B.S
                        <input type="date" name="dob">
                     </td>
                    <td>
                        Age
                        <input type="text" name="age">
                    </td>
                </div>
            </tr>
            <tr>
                <div class="add-phn input-text">
                    <td>
                        Address :
                        <input type="text" name="address" required>
                    </td>
                    <td>
                        Phone No.
                        <input type="text" name="phn" required>
                    </td>
                </div>
            </tr>
            <tr>
                <td colspan="3">
                <div class="father-info">
                    <div class="title">
                        Father's Information
                    </div>
                </td>
                </tr>
                <tr>
                    <div class="name-number input-text">
                <td>
                        Father's Name :
                        <input type="text" name="fname">
                </td>
                <td>
                        Mobile No.
                        <input type="text" name="cntct-no">
                    </td>
                </div>
                </tr>
                <tr>
                <td>
                    <div class="mail input-text">
                        Mail
                        <input type="text" name="mail">
                        </div>
                </td>
                <td>
                    <div class="occup">
                        Occupation
                        <input type="text" name="occup">
                    </div>
                </td>
                </div>
            </tr>
            <tr>
                <td colspan="3">
                <div class="mother-info">
                    <div class="title">
                        Mother's Information
                    </div>
                </td>
                </tr>
                <tr>
                    <td>
                    <div class="name input-text">
                        Mothers's Name :
                        <input type="text" name="fname">
                        </div>
                    </td>
                <td>
                    <div class="number">
                        Mobile No.
                        <input type="text" name="cntct-no">
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="mail-occup input-text">
                        Mail
                        <input type="text" name="mail">
                    </div>
                </td>
                <td>
                    <div class="occup">
                        Occupation
                        <input type="text" name="occup">
                    </div>
                </td>
                </div>
            </tr>
            <tr>
                <td colspan="3">
                <div class="local-gurdain-info">
                    <div class="title">
                        Local Gurdain's Information
                    </div>
                </td>
                </tr>
                <tr>
                    <td>
                            <div class="name-number input-text">
                                Local Gurdain's Name :
                            <input type="text" name="fname">
                    </td>
                    <td>
                        Mobile No.
                        <input type="text" name="cntct-no">
                    </td>
                </tr>
                <tr>
                <td>
                    <div class="mail-occup input-text">
                        Mail
                        <input type="text" name="mail">
                    </div>
                </td>
                <td>
                    <div class="occup">
                        Occupation
                        <input type="text" name="occup">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                <div class="prev-school-info">
                    <div class="title">
                        Previous School Information
                    </div>
                </td>
                </tr>
                <tr>
                    <div class="name-number input-text">
                <td>
                        School Name :
                        <input type="text" name="fname">
                </td>
                <td>
                        Address :
                        <input type="text" name="cntct-no">
                    </td>
                </div>
                </tr>
                <tr>
                <td>
                    <div class="mail-occup input-text">
                        GPA :
                        <input type="text" name="mail">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="query">
                        <textarea type="message" name="textarea" placeholder="Write your query here"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="submit-btn">
                            <button type="button">
                            Apply Now
                        </button>
                    </div>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>