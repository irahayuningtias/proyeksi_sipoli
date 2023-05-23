
<!DOCTYPE html>
<html>
<head>
   <style>
      .container {
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
 }
 
 .schedule {
   text-align: center;
   padding: 20px;
   background-color: #f5f5f5;
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
 }
 
 .schedule h2 {
   color: #333;
   margin-bottom: 20px;
 }
 
 table {
   width: 100%;
   border-collapse: collapse;
 }
 
 th, td {
   padding: 10px;
 }
 
 th {
   background-color: #f9f9f9;
   font-weight: bold;
   text-transform: uppercase;
   color: #555;
 }
 
 td {
   background-color: #fff;
   color: #333;
 }
 
 tr:nth-child(even) td {
   background-color: #f5f5f5;
 }
 
 tr:hover td {
   background-color: #e0e0e0;
 }
      </style>
</head>	
<body>
  <div class="container">
    <div class="schedule">
      <h2>Jadwal Praktek Dokter</h2>
      <table>
        <tr>
          <th>Dokter</th>
          <th>Hari</th>
          <th>Jam Praktek</th>
        </tr>
        <tr>
          <td>Dokter Umum</td>
          <td>Rabu</td>
          <td>08:00 - 11:00</td>
        </tr>
        <tr>
         <td> </td>
         <td>Jumat</td>
          <td>12:15 - 14:15</td>
</tr>
        <tr>
          <td>Dokter Gigi</td>
          <td>Rabu</td>
          <td>08:00 - 11:00</td>
         </tr>

      </table>
    </div>
  </div>
</body>
</html>
