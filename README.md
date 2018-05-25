# Composer Scripts

## Eventos

### Eventos de comando

 - **pre-install-cmd**: ocorre antes que o comando `composer install` for executado com um arquivo `composer.lock` presente.
 - **post-install-cmd**: ocorre após o comando `composer install` ter sido executado com um arquivo `composer.lock` presente.
 - **pre-update-cmd**: ocorre antes que o `comando update` seja executado ou antes que o `comando install` seja executado sem um arquivo `composer.lock` presente
 - **post-update-cmd**: ocorre após o `comando update` ter sido executado ou após o `comando install` ter sido executado sem um arquivo `composer.lock` presente
 - **post-status-cmd**: ocorre após o comando `composer status` ter sido executado.
 - **pre-archive-cmd**: ocorre antes que o comando `composer archive` seja executado.
 - **post-archive-cmd**: ocorre após o comando `composer archive` ter sido executado.
 - **pre-autoload-dump**: ocorre antes que o autoloader seja despejado, seja durante a instalação / atualização, ou através do comando dump-autoload.
 - **post-autoload-dump**: ocorre após o autoloader ter sido despejado, durante a instalação / atualização, ou através do comando dump-autoload.
 - **post-root-package-install**: ocorre após o pacote raiz ter sido instalado, durante o comando create-project.
 - **post-create-project-cmd**: ocorre após o comando create-project ser executado.

### Eventos de instalação

 - **pre-dependencies-solving**: ocorre antes que as dependências sejam resolvidas.
 - **post-dependencies-solving**: ocorre após as dependências terem sido resolvidas

### Eventos de pacote

 - **pre-package-install**: ocorre antes de um pacote ser instalado.
 - **post-package-install**: ocorre depois de um pacote ser instalado.
 - **pre-package-update**: ocorre antes de um pacote ser atualizado.
 - **post-package-update**: ocorre depois de um pacote ser atualizado.
 - **pre-package-uninstall**: ocorre antes de um pacote ser desinstado.
 - **post-package-uninstall**: ocorre depois de um pacote ser desinstado.

### Eventos de plugin

 - **init**: ocorre antes da instância do Composer ser inicializada
 - **command**: ocorre depois de qualquer comando do Composer ser executado via CLI. Fornece dados de entrada e saída.
 - **pre-file-download**: ocorre depois de arquivos serem baixados e permite que você manipule o objeto RemoteFilesystem antes de baixar arquivos com base no URL a ser baixado.
 - **pre-command-run**: ocorre depois de um comando ser executado e permite que você manipule as opções e argumentos do objeto InputInterface para ajustar o comportamento de um comando.
