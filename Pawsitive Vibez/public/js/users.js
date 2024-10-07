function fetchUsers(page = 1) {
  fetch(`${baseUrl}utils/user.php?page=${page}`)
      .then(response => response.json())
      .then(users => {
          renderTable(users, page);
          renderPagination(totalPages, page);
      });
}

function renderTable(users, page) {
  const tableContainer = document.getElementById('userTable');
  let tableHTML = `
      <table>
          <thead>
              <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>User Type</th>
                  <th>Joined On</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
  `;

  users.forEach(user => {
      tableHTML += `
          <tr>
              <td>${user.first_name}</td>
              <td>${user.last_name}</td>
              <td>${user.email}</td>
              <td>${user.user_type}</td>
              <td>${user.joined_on}</td>
              <td>
                  <div class="action-buttons">
                      <button onclick="toggleUserType(${user.id}, ${page})">Toggle User Type</button>
                      <button class="delete" onclick="deleteUser(${user.id}, ${page})">Delete</button>
                  </div>
              </td>
          </tr>
      `;
  });

  tableHTML += `</tbody></table>`;
  tableContainer.innerHTML = tableHTML;
}

function renderPagination(totalPages, currentPage) {
  const paginationContainer = document.getElementById('pagination');
  let paginationHTML = '';

  paginationHTML += `
      <a href="#" class="${currentPage === 1 ? 'disabled' : ''}" onclick="fetchUsers(${currentPage - 1})">Previous</a>
  `;

  for (let i = 1; i <= totalPages; i++) {
      paginationHTML += `
          <a href="#" class="${i === currentPage ? 'active' : ''}" onclick="fetchUsers(${i})">${i}</a>
      `;
  }

  paginationHTML += `
      <a href="#" class="${currentPage === totalPages ? 'disabled' : ''}" onclick="fetchUsers(${currentPage + 1})">Next</a>
  `;

  paginationContainer.innerHTML = paginationHTML;
}

function toggleUserType(userId, page = 1) {
  fetch(`${baseUrl}utils/user.php?toggleId=${userId}&page=${page}`)
      .then(response => response.json())
      .then(users => {
          renderTable(users);
          renderPagination(totalPages, page);
      });
}

function deleteUser(userId, page = 1) {
  fetch(`${baseUrl}utils/user.php?deleteId=${userId}&page=${page}`)
      .then(response => response.json())
      .then(users => {
          renderTable(users);
          renderPagination(totalPages, page);
      });
}

fetchUsers();
