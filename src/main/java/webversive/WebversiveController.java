package webversive;

import java.util.HashSet;
import java.util.Set;
import java.util.Arrays;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.PathVariable;

@Controller
public class WebversiveController {

	private static final Set<String> NAV = new HashSet<String>(Arrays.asList(
	    new String[] {
	    	"projects","services","technology","artless"
	    }
	));
	private static final Set<String> POLICY_PATHS = new HashSet<String>(Arrays.asList(
	    new String[] {
	     	"privacypolicy","cookiepolicy","terms","legal"
	    }
	));
	private static final Set<String> RESTRICTED_PATHS = new HashSet<String>(Arrays.asList(
	    new String[] {"untitled"}
	));

	@RequestMapping(value={"/"})
	public String servePage(Model model) {
		model.addAttribute("title", "home");
		return "index";
	}
	@RequestMapping(value={"/{path}"})
	public String servePage(@PathVariable String path, Model model) {
		if( POLICY_PATHS.contains(path) )
			model.addAttribute("style", "policy");
		else {
			if( !NAV.contains(path) )
				path = "404";
			model.addAttribute("style", path);
		}

		model.addAttribute("title", path);
		return path;
	}

}
