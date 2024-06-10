{ pkgs }: {
  channel = "stable-23.11";
  packages = [
    pkgs.php83
    pkgs.php83Packages.composer
    pkgs.nodejs_20
    pkgs.mysql80
  ];
  services.mysql = {
    enable = true;
    package = pkgs.mysql80;
  };
  idx.extensions = [
    "amiralizadeh9480.laravel-extra-intellisense"
    "bradlc.vscode-tailwindcss"
    "codingyu.laravel-goto-view"
    "EditorConfig.EditorConfig"
    "equinusocio.vsc-material-theme-icons"
    "formulahendry.auto-rename-tag"
    "LaurentTreguier.vscode-simple-icons"
    "Letgamer.sweet-vscode-icons"
    "naoray.laravel-goto-components"
    "onecentlin.laravel-blade"
    "onecentlin.laravel-extension-pack"
    "onecentlin.laravel5-snippets"
    "shufo.vscode-blade-formatter"
    "bmewburn.vscode-intelephense-client"
    "formulahendry.auto-close-tag"
    "heybourn.headwind"
    "MehediDracula.php-namespace-resolver"
    "mohamedbenhida.laravel-intellisense"
    "MrChetan.goto-laravel-components"
    "MrChetan.laravel-extension-pack"
    "MrChetan.laravel-goto-config"
    "MrChetan.phpstorm-parameter-hints-in-vscode"
    "austenc.laravel-blade-spacer"
    "cweijan.dbclient-jdbc"
    "cweijan.vscode-database-client2"
    "eamodio.gitlens"
    "stef-k.laravel-goto-controller"
    "usernamehw.errorlens"
    "aaron-bond.better-comments"
    "smcpeak.default-keys-windows"
    "zhuangtongfa.material-theme"
  ];
  idx.previews = {
    enable = true;
    previews = {
      web = {
        command = [ "php" "artisan" "serve" "--port" "$PORT" "--host" "0.0.0.0" ];
        manager = "web";
      };
    };
  };
}
