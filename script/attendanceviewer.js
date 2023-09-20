
const ATTENDANCE_DATA_URL = "../storage/attendance.json";

const REFRESH_INTERVAL = 50000;

const ATTENDANCE_DIV_ID = "attendances";

function getKeysWithSameValue(obj, value) {
    return Object.keys(obj).filter(key => obj[key] === value);
  }
// Define a function to fetch the attendance data from the server
async function fetchAttendanceData() {
  const response = await fetch(ATTENDANCE_DATA_URL);
  return await response.json();
}

// Define a function to create the HTML elements based on the attendance data
function createAttendanceElements(attendanceData) {
  const attendanceDiv = document.getElementById(ATTENDANCE_DIV_ID);
  attendanceDiv.innerHTML = "";

  for (const title in attendanceData) {
    const titleData = attendanceData[title];
    const presentCount = Object.values(titleData).filter(status => status === "Present").length;
    const absentCount = Object.values(titleData).filter(status => status === "Absent").length;
    const presentPercentage1 =(presentCount / 66);
    const presentPercentage =(presentPercentage1 * 100).toFixed(2);



    const titleHeader = document.createElement("h1");
    titleHeader.textContent = title;

    const presentParagraph = document.createElement("p");
    presentParagraph.textContent = `Present: ${presentCount}`;

    const absentParagraph = document.createElement("p");
    absentParagraph.textContent = `Absent: ${absentCount}`;

    const presentPercentParagraph = document.createElement("p");
    presentPercentParagraph.textContent = `Percentage: ${presentPercentage}%`;

    // const absentees = getKeysWithSameValue(titleData, "Absent");
    // const absenteesParagraph = document.createElement("p");
    // absenteesParagraph.id = "absentees";
    // if (absentees.length > 0) {
  // absenteesParagraph.textContent = `Absentees: ${absentees.join(", ")}`;
// } else {
  // absenteesParagraph.textContent = "Absentees: None";
// }

const titleDiv = document.createElement("div"); 

titleDiv.appendChild(titleHeader);
titleDiv.appendChild(presentParagraph);
titleDiv.appendChild(absentParagraph);
titleDiv.appendChild(presentPercentParagraph);
// titleDiv.appendChild(absenteesParagraph);

attendanceDiv.insertBefore(titleDiv, attendanceDiv.firstChild);

const lastTitleDiv = attendanceDiv.firstChild;

  }
}

// Define a function to refresh the attendance data every 5 seconds
async function refreshAttendanceData() {
  const attendanceData = await fetchAttendanceData();
  createAttendanceElements(attendanceData);
}

// Call the refreshAttendanceData function initially to load the attendance data
refreshAttendanceData();


setInterval(refreshAttendanceData, REFRESH_INTERVAL);


// const wordsToReplace = [ 'stu0', 'stu1', 'stu2', 'stu3', 'stu4', 'stu5', 'stu6', 'stu7', 'stu8', 'stu9', 'stu10', 'stu11', 'stu12', 'stu13', 'stu14', 'stu15', 'stu16', 'stu17', 'stu18', 'stu19', 'stu20', 'stu21', 'stu22', 'stu23', 'stu24', 'stu25', 'stu26', 'stu27', 'stu28', 'stu29', 'stu30', 'stu31', 'stu32', 'stu33', 'stu34', 'stu35', 'stu36', 'stu37', 'stu38', 'stu39', 'stu40', 'stu41', 'stu42', 'stu43', 'stu44', 'stu45', 'stu46', 'stu47', 'stu48', 'stu49', 'stu50', 'stu51', 'stu52', 'stu53', 'stu54', 'stu55', 'stu56', 'stu57', 'stu58', 'stu59', 'stu60', 'stu61', 'stu62', 'stu63', 'stu64', 'stu65'];
const registerNumbers = ['611221243001', '611221243002', '611221243003', '611221243004', '611221243005', '611221243006', '611221243007', '611221243008', '611221243009', '611221243010', '611221243011', '611221243012', '611221243013', '611221243014', '611221243015', '611221243016', '611221243018', '611221243019', '611221243020', '611221243021', '611221243022', '611221243023', '611221243024', '611221243025', '611221243026', '611221243027', '611221243028', '611221243029', '611221243030', '611221243031', '611221243032', '611221243033', '611221243034', '611221243035', '611221243036', '611221243037', '611221243038', '611221243039', '611221243040', '611221243041', '611221243042', '611221243043', '611221243044', '611221243045', '611221243046', '611221243047', '611221243048', '611221243049', '611221243050', '611221243051', '611221243052', '611221243053', '611221243054', '611221243055', '611221243056', '611221243057', '611221243058', '611221243059', '611221243060', '611221243061', '611221243062', '611221243063', '611221243302', '611221243303', '611221243304', '611221243305', '611221243306'];

// Get all the HTML content of your page
const absenteesContent = document.getElementById("absentees").textContent;

const studentNames = absenteesContent.split(", ");

// create a new array to store the register numbers
const registerNumbersArray = [];

// loop through the student names and replace each name with its respective register number
for (let i = 0; i < studentNames.length; i++) {
  // get the number part of the student name by removing the "stu" prefix
  const studentNumber = studentNames[i].substring(3);
  
  // get the register number from the registerNumbers array using the studentNumber as an index
  const registerNumber = registerNumbers[parseInt(studentNumber)];
  
  // add the register number to the new array
  registerNumbersArray.push(registerNumber);
}

// join the registerNumbersArray into a string with commas
const registerNumbersString = registerNumbersArray.join(", ");

// set the content of the absentees element to the register numbers string
document.getElementById("absentees").textContent = registerNumbersString;

