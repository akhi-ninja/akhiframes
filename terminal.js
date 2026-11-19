const promptForm = document.querySelector('#prompt');
const input = document.querySelector('#command');
const status = document.querySelector('#status');
const panels = [...document.querySelectorAll('#output > section')];
const shortcuts = [...document.querySelectorAll('[data-command]')];
const commands = new Set([...panels.map(panel => panel.id), 'whoami', 'clear']);

function render(command) {
  const valid = commands.has(command);
  for (const panel of panels) {
    panel.hidden = panel.id !== command;
  }
  for (const link of shortcuts) {
    if (link.dataset.command === command) {
      link.setAttribute('aria-current', 'true');
    } else {
      link.removeAttribute('aria-current');
    }
  }
  status.textContent = command === 'whoami'
    ? 'Akhil Gopinath · Solution Architect & Technical Lead'
    : valid ? (command === 'clear' ? '' : '$ ' + command)
    : 'Unknown command: ' + command + '. Type help for available commands.';
}

function run(command) {
  render(command);
  if (commands.has(command) && location.hash !== '#' + command) {
    history.pushState(null, '', '#' + command);
  }
}

function restore() {
  const command = location.hash.slice(1);
  render(commands.has(command) ? command : 'projects');
}

promptForm.hidden = false;
promptForm.addEventListener('submit', event => {
  event.preventDefault();
  const command = input.value.trim().toLowerCase().replace(/^\.\//, '');
  if (command) run(command);
  input.value = '';
  input.focus();
});

for (const link of shortcuts) {
  link.addEventListener('click', event => {
    if (event.ctrlKey || event.metaKey || event.shiftKey || event.altKey) return;
    event.preventDefault();
    run(link.dataset.command);
    if (link.closest(".mast")) document.querySelector("#explore").scrollIntoView();
  });
}

window.addEventListener('popstate', restore);
window.addEventListener('hashchange', restore);
restore();
