{ pkgs }: {
	deps = [
   pkgs.docker-compose
		pkgs.nodejs-16_x
  pkgs.php80
        pkgs.php80Packages.composer
	];
}