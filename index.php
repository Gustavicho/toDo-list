<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To Do List</title>
  <link rel="stylesheet" href="src/css/style.css">
  <script src="https://kit.fontawesome.com/1f2983953c.js" crossorigin="anonymous"></script>
</head>
<body>
  <form action="" class="to-do--form">
    <label for="task">Insira a Tarefa</label>
    <input type="text" name="task" id="task">
    <button type="submit">
      <i class="fa-solid fa-plus"></i>
    </button>
  </form>

  <div class="task-list">
    <div class="task">
      <select name="task--progress" id="task--progress">
        <option value="">Para fazer</option>
        <option value="">Em Andamento</option>
        <option value="">Feito</option>
      </select>

      <p class="task--text">
        Terminar isso daqui!
      </p>

      <div class="task--btns">
        <button class="action-btn edit">
          <i class="fa-solid fa-pen"></i>
        </button>
        <a href="" class="action-btn delete">
          <i class="fa-solid fa-trash"></i>
        </a>
      </div>

      <dialog class="container__edit--form">
        <button class="close-btn">
          <i class="fa-solid fa-xmark"></i>
        </button>
        <form action="" class="edit--form">
          <label for="edit-task">Modifique a tarefa</label>
          <input type="text">
          <button type="submit">
            <i class="fa-solid fa-check"></i>
          </button>
        </form>
      </dialog>
    </div>
  </div>
  <script src="src/js/script.js"></script>
</body>
</html>